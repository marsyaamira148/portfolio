<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\PortfolioModel;

class PortfolioController extends AdminController
{
    protected $portfolioModel; // ✅ tambahkan properti

    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel(); // ✅ inisialisasi
    }

    public function index()
    {
        $portfolioModel = new PortfolioModel();

        $portfolios = $portfolioModel
            ->orderBy('created_at', 'DESC')
            ->paginate(8);

        $portfolios = array_map(function($p) {
            return (object) array_merge([
                'id'           => '',
                'title'        => '',
                'slug'         => '',
                'description'  => '',
                'date'         => '',
                'thumbnail'    => '',
                'project_file' => '',
                'client'       => '',
                'category'     => '',
                'tools'        => '',
                'start_date'   => null,
                'end_date'     => null,
                'is_featured'  => 0,
            ], (array) $p);
        }, $portfolios);

        $this->data['portfolios'] = $portfolios;
        $this->data['pager']      = $portfolioModel->pager ?? null;
        $this->data['page_title'] = "Portfolio";
        $this->data['search_type'] = "portfolio";
        $this->data['base_url']   = base_url();

        return $this->parse('Admin::portfolio_list', $this->data);
    }

    public function create()
    {
        $this->data['page_title'] = "Tambah Portfolio";
        $this->data['base_url']   = base_url();

        return $this->parse('Admin::portfolio_form', $this->data);
    }

    public function store()
    {
        $portfolioModel = new PortfolioModel();

        $title = $this->request->getPost('title') ?? '';
        $slug  = url_title($title, '-', true);

        $data = [
            'title'       => $title,
            'slug'        => $slug,
            'description' => $this->request->getPost('description') ?? '',
            'client'      => $this->request->getPost('client') ?? '',
            'category'    => $this->request->getPost('category') ?? '',
            'tools'       => $this->request->getPost('tools') ?? '',
            'start_date'  => $this->request->getPost('start_date') ?? null,
            'end_date'    => $this->request->getPost('end_date') ?? null,
            'date'        => $this->request->getPost('date') ?? date('Y-m-d'),
        ];

        $uploadDir = ROOTPATH . 'public/uploads/portfolio/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $thumbnail = $this->request->getFile('thumbnail');
        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            $thumbName = $thumbnail->getRandomName();
            $thumbnail->move($uploadDir, $thumbName);
            $data['thumbnail'] = 'portfolio/' . $thumbName;
        }

        $projectFile = $this->request->getFile('project_file');
        if ($projectFile && $projectFile->isValid() && !$projectFile->hasMoved()) {
            $fileName = $projectFile->getRandomName();
            $projectFile->move($uploadDir, $fileName);
            $data['project_file'] = 'portfolio/' . $fileName;
        }

        $portfolioModel->insert($data);

        return redirect()->to(base_url('admin/portfolio'))
                         ->with('success', 'Portfolio berhasil ditambahkan.');
    }

    public function edit($id = null)
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->find($id);

        if (!$portfolio) {
            return redirect()->to(base_url('admin/portfolio'))
                             ->with('error', 'Data portfolio tidak ditemukan.');
        }

        $portfolio = (object) $portfolio;

        $this->data['portfolio']  = $portfolio;
        $this->data['base_url']   = base_url();
        $this->data['page_title'] = 'Edit Portfolio';

        return $this->parse('Admin::portfolio_edit', $this->data);
    }

    public function update($id = null)
    {
        $portfolioModel = new PortfolioModel();
        $oldData = $portfolioModel->find($id);

        if (!$oldData) {
            return redirect()->to(base_url('admin/portfolio'))
                             ->with('error', 'Data portfolio tidak ditemukan.');
        }

        $oldData = (object) $oldData;

        $title = $this->request->getPost('title') ?? '';
        $slug  = url_title($title, '-', true);

        $data = [
            'title'       => $title,
            'slug'        => $slug,
            'description' => $this->request->getPost('description') ?? '',
            'client'      => $this->request->getPost('client') ?? '',
            'category'    => $this->request->getPost('category') ?? '',
            'tools'       => $this->request->getPost('tools') ?? '',
            'start_date'  => $this->request->getPost('start_date') ?? null,
            'end_date'    => $this->request->getPost('end_date') ?? null,
            'date'        => $this->request->getPost('date') ?? $oldData->date,
        ];

        $uploadDir = ROOTPATH . 'public/uploads/portfolio/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $thumbnail = $this->request->getFile('thumbnail');
        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            if (!empty($oldData->thumbnail) && file_exists(ROOTPATH . 'public/uploads/' . $oldData->thumbnail)) {
                unlink(ROOTPATH . 'public/uploads/' . $oldData->thumbnail);
            }
            $newName = $thumbnail->getRandomName();
            $thumbnail->move($uploadDir, $newName);
            $data['thumbnail'] = 'portfolio/' . $newName;
        }

        $projectFile = $this->request->getFile('project_file');
        if ($projectFile && $projectFile->isValid() && !$projectFile->hasMoved()) {
            if (!empty($oldData->project_file) && file_exists(ROOTPATH . 'public/uploads/' . $oldData->project_file)) {
                unlink(ROOTPATH . 'public/uploads/' . $oldData->project_file);
            }
            $fileName = $projectFile->getRandomName();
            $projectFile->move($uploadDir, $fileName);
            $data['project_file'] = 'portfolio/' . $fileName;
        }

        $filtered = [];
        foreach ($data as $key => $val) {
            if ($val !== null && $val !== $oldData->$key) {
                $filtered[$key] = $val;
            }
        }

        if (empty($filtered)) {
            return redirect()->to(base_url('admin/portfolio'))
                             ->with('info', 'Tidak ada perubahan pada data portfolio.');
        }

        $portfolioModel->update($id, $filtered);

        return redirect()->to(base_url('admin/portfolio'))
                         ->with('success', 'Portfolio berhasil diperbarui.');
    }

    public function delete($id = null)
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->find($id);

        if ($portfolio) {
            $portfolio = (object) $portfolio;

            if (!empty($portfolio->thumbnail) && file_exists(ROOTPATH . 'public/uploads/' . $portfolio->thumbnail)) {
                unlink(ROOTPATH . 'public/uploads/' . $portfolio->thumbnail);
            }
            if (!empty($portfolio->project_file) && file_exists(ROOTPATH . 'public/uploads/' . $portfolio->project_file)) {
                unlink(ROOTPATH . 'public/uploads/' . $portfolio->project_file);
            }

            $portfolioModel->delete($id);
        }

        return redirect()->to(base_url('admin/portfolio'))
                         ->with('success', 'Portfolio berhasil dihapus.');
    }

    public function setFeatured($id, $status)
    {
        $portfolioModel = new \App\Models\PortfolioModel();

        $portfolio = $portfolioModel->find($id);
        if (!$portfolio) {
            return redirect()->back()->with('error', 'Portfolio tidak ditemukan.');
        }

        if ($status == 1) {
            $count = $portfolioModel->where('is_featured', 1)->countAllResults();
            if ($count >= 8) {
                return redirect()->back()->with('error', 'Maksimal hanya 8 portfolio yang bisa ditampilkan di One Page.');
            }
        }

        if ($portfolio['is_featured'] != $status) {
            $portfolioModel->update($id, ['is_featured' => $status]);
            return redirect()->back()->with('success', 'Status portfolio berhasil diperbarui.');
        }

        return redirect()->back()->with('info', 'Status portfolio tidak berubah.');
    }

    public function bulkDelete()
    {
        $ids = $this->request->getPost('ids');
        if (!empty($ids)) {
            $portfolioModel = new \App\Models\PortfolioModel();
            $portfolioModel->whereIn('id', $ids)->delete();
            return redirect()->to(base_url('admin/portfolio'))
                             ->with('success', 'Portfolio terpilih berhasil dihapus.');
        }

        return redirect()->to(base_url('admin/portfolio'))
                         ->with('success', 'Tidak ada portfolio yang dipilih.');
    }

    public function detail($id)
    {
        $portfolioModel = new \App\Models\PortfolioModel();
        $project = $portfolioModel->find($id);

        if (!$project) {
            return redirect()->to(base_url('admin/portfolio'))
                            ->with('error', 'Portfolio tidak ditemukan.');
        }

        $project = (object) $project;

        // Ambil user dari AdminController (sudah otomatis)
        $user = $this->user;

        return $this->parse('Admin::portfolio_detail', [
            'project' => $project,
            'user' => $user,               // user valid dari AdminController
            'base_url' => base_url(),
            'page_title' => 'Detail Portfolio'
        ]);
    }

}
