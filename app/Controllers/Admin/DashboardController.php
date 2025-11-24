<?php
namespace App\Controllers\Admin;

use App\Models\PortfolioModel;
use App\Models\TestimonialModel;
use App\Models\PostModel;
use App\Models\ContactModel;

class DashboardController extends AdminController
{
    public function index()
    {
        $this->data['page_title'] = "Dashboard";
        $this->data['search_type'] = "all"; // dashboard = cari semua

        $portfolioModel   = new PortfolioModel();
        $testimonialModel = new TestimonialModel();
        $postModel        = new PostModel();
        $contactModel     = new ContactModel();

        $db = \Config\Database::connect();

        // === Counter Section ===
        $totalProjects     = $portfolioModel->countAll();
        $totalBlogs        = $postModel->countAll();
        $totalTestimonials = $testimonialModel->countAll();
        $totalContacts     = $contactModel->countAll();

        $this->data['counters'] = [
            ['icon' => 'fa-briefcase yellow_color', 'total' => $totalProjects,     'label' => 'Total Projects'],
            ['icon' => 'fa-file-text blue1_color',  'total' => $totalBlogs,        'label' => 'Blog'],
            ['icon' => 'fa-star green_color',       'total' => $totalTestimonials, 'label' => 'Testimonials'],
            ['icon' => 'fa-envelope red_color',     'total' => $totalContacts,     'label' => 'Contacts'],
        ];

        // === Visitor Growth (Line Chart) ===
        $query = $db->query("
            SELECT DATE(visited_at) AS tanggal, COUNT(*) AS total
            FROM visitors
            GROUP BY DATE(visited_at)
            ORDER BY DATE(visited_at) ASC
        ");
        $result = $query->getResultArray();

        $labels = [];
        $totals = [];
        foreach ($result as $row) {
            $labels[] = date('d M', strtotime($row['tanggal'])); // Contoh: 06 Nov
            $totals[] = (int)$row['total'];
        }

        // Kirim data untuk Chart.js di dashboard.tpl
        $this->data['chart_labels'] = json_encode($labels);
        $this->data['chart_totals'] = json_encode($totals);

        // Total keseluruhan visitor (untuk badge di chart)
        $this->data['totalVisitors'] = $db->table('visitors')->countAllResults();

        // === Latest Portfolios (4 terbaru) ===
        $latestPortfolios = $portfolioModel
            ->orderBy('date', 'DESC')
            ->findAll(4);

        foreach ($latestPortfolios as &$pf) {
            $pf['image_url'] = !empty($pf['thumbnail'])
                ? base_url('uploads/' . $pf['thumbnail'])
                : base_url('uploads/default-thumbnail.jpg');
        }
        unset($pf);
        $this->data['latestPortfolios'] = $latestPortfolios;

        // === Latest Blogs (4 terbaru) ===
        $latestBlogs = $postModel
            ->orderBy('created_at', 'DESC')
            ->findAll(4);

        foreach ($latestBlogs as &$blog) {
            $blog['image_url'] = !empty($blog['image'])
                ? base_url('uploads/' . $blog['image'])
                : base_url('uploads/default-thumbnail.jpg');
        }
        unset($blog);
        $this->data['latestBlogs'] = $latestBlogs;

        // === Latest Testimonials (6 terbaru) ===
        $testimonials = $testimonialModel
            ->orderBy('created_at', 'DESC')
            ->findAll(6);
        $this->data['testimonials'] = $testimonials;

        // === Base URL untuk Smarty ===
        $this->data['base_url'] = base_url('/');

        return $this->parse('Admin::dashboard', $this->data);
    }
}
