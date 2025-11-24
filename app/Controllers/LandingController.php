<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;
use App\Models\PostModel;
use App\Models\TestimonialModel;
use App\Models\ContactInfoModel;
use App\Models\ContactModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class LandingController extends BaseController
{
    /**
     * Halaman utama (Landing Page)
     */
    public function index()
{
    // === Catat visitor ===
    $db = \Config\Database::connect();
    $db->table('visitors')->insert([
        'ip_address' => $this->request->getIPAddress(),
        'user_agent' => $this->request->getUserAgent()->getAgentString(),
        'visited_at' => date('Y-m-d H:i:s'),
    ]);

    // === Lanjutkan kode existing kamu ===
    $portfolioModel   = new PortfolioModel();
    $postModel        = new PostModel();
    $testimonialModel = new TestimonialModel();
    $contactInfoModel = new ContactInfoModel();
    $userModel        = new UserModel();

    $projects = $portfolioModel->getFeatured(8);
    $posts = $postModel->getFeatured(3);
    $testimonials = $testimonialModel
        ->where('status', 'approved')
        ->orderBy('created_at', 'DESC')
        ->findAll();

    $contactInfo = $contactInfoModel->first();

    $authUser = auth()->user();
    $user = [
        'full_name'     => '-',
        'date_of_birth' => null,
        'address'       => '-',
        'email'         => '-',
        'phone'         => '-',
        'avatar'        => null,
        'bio'           => '-'
    ];

    if ($authUser) {
        $dbUser = $userModel->where('email', $authUser->email)->first();
        if ($dbUser) {
            $user = $dbUser;
        }
    }

    return view('landing/index', [
        'projects'     => $projects,
        'posts'        => $posts,
        'testimonials' => $testimonials,
        'contactInfo'  => $contactInfo,
        'user'         => $user,
        'success'      => session()->getFlashdata('success'),
    ]);
}


    /**
     * Simpan pesan contact dari public form
     */
    public function sendMessage()
    {
        $contactModel = new ContactModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        $contactModel->insert($data);

        return redirect()->to(base_url('/#contact-section'))
            ->with('success', 'Pesan berhasil dikirim! ✅');
    }

    // submittestimonial
    public function submit()
    {
        $testimonialModel = new TestimonialModel();

        $file = $this->request->getFile('photo');
        $photoName = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $photoName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/testimonials', $photoName);
        }

        $testimonialModel->insert([
            'name'     => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'rating'   => $this->request->getPost('rating'),
            'message'  => $this->request->getPost('message'),
            'photo'    => $photoName,
            'status'   => 'pending'
        ]);

        return redirect()
            ->to(base_url('/#testimonial-section'))
            ->with('success', 'Terima kasih! Testimoni Anda sedang menunggu persetujuan.');
    }


    /**
     * Halaman Blog (list semua blog)
     */
    public function blog()
    {
        $postModel = new PostModel();
        $perPage   = 6;

        $posts = $postModel->orderBy('created_at', 'DESC')
                           ->paginate($perPage, 'posts');

        return view('landing/blog', [
            'posts' => $posts,
            'pager' => $postModel->pager,
        ]);
    }

    /**
     * Halaman Blog Detail
     */
 public function blogDetail($slug)
{
    $postModel = new PostModel();
    $userModel = new UserModel();

    // Ambil post berdasarkan slug
    $post = $postModel->where('slug', $slug)->first();

    if (!$post) {
        throw PageNotFoundException::forPageNotFound('Blog tidak ditemukan');
    }

    // Ambil data author
    $author = $userModel->where('username', $post['author'])->first();

    // Lengkapi data post
    $post['author_name'] = $author['full_name'] ?? $post['author'];
    $post['avatar']      = $author['avatar'] ?? 'default-avatar.png';

    // === Tambahan: Ambil postingan populer (3 postingan terbaru / featured) ===
    $popular = $postModel->getFeatured(3);

    // Kirim semua data ke view
    return view('landing/blog_detail', [
        'post'     => $post,
        'popular'  => $popular,   // <-- wajib agar tidak error lagi
        'base_url' => base_url()
    ]);
}

    /**
     * Halaman Portfolio (lihat selengkapnya)
     */
    public function portfolio()
    {
        $portfolioModel = new PortfolioModel();
        $perPage   = 15;

        $projects = $portfolioModel->orderBy('created_at', 'DESC')
                                   ->paginate($perPage, 'projects');

        return view('landing/portfolio', [
            'projects' => $projects,
            'pager'    => $portfolioModel->pager,
        ]);
    }

   /**
 * Halaman Portfolio Detail
 */
public function portfolioDetail($slug)
{
    $portfolioModel = new PortfolioModel();

    // Ambil project saat ini
    $project = $portfolioModel->where('slug', $slug)->first();

    if (!$project) {
        throw PageNotFoundException::forPageNotFound("Project tidak ditemukan");
    }

    // Ambil portfolio lain / populer, kecuali project saat ini
    $popular_portfolio = $portfolioModel
        ->where('slug !=', $slug)
        ->orderBy('created_at', 'DESC')
        ->findAll(6); // ambil maksimal 6 project

    return view('landing/portfolio_detail', [
        'project' => $project,
        'popular_portfolio' => $popular_portfolio, // kirim ke view
    ]);
}

}
