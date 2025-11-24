<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\TestimonialModel;

class TestimonialController extends AdminController
{
    protected $testimonialModel;

    public function __construct()
    {
        $this->testimonialModel = new TestimonialModel();
    }

    // =====================================
    // LIST TESTIMONIAL + FILTER (ALL/P/A/R)
    // =====================================
    public function index()
    {
        $filter = $this->request->getGet('status') ?? 'all';

        if ($filter === 'all') {
            $testimonials = $this->testimonialModel
                ->orderBy('created_at', 'DESC')
                ->paginate(10, 'testi');
        } else {
            $testimonials = $this->testimonialModel
                ->where('status', $filter)
                ->orderBy('created_at', 'DESC')
                ->paginate(15, 'testi');
        }

        $this->data['title']        = 'Daftar Testimonial';
        $this->data['testimonials'] = $testimonials;
        $this->data['filter']       = $filter;
        $this->data['pager']        = $this->testimonialModel->pager;

        // PENTING → BIAR SEARCH DI HALAMAN TESTI TIDAK IKUT PORTFOLIO/BLOG
        $this->data['search_type'] = 'testimonial';

        return $this->parse('Admin::testimonial_index', $this->data);
    }

    // =====================================
    // FORM CREATE
    // =====================================
    public function create()
    {
        $this->data['title']        = 'Tambah Testimonial';
        $this->data['search_type']  = 'testimonial';

        return $this->parse('Admin::testimonial_create', $this->data);
    }

    // =====================================
    // STORE
    // =====================================
    public function store()
    {
        $file = $this->request->getFile('photo');
        $photoName = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $photoName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/testimonials', $photoName);
        }

        $this->testimonialModel->insert([
            'name'      => $this->request->getPost('name'),
            'position'  => $this->request->getPost('position'),
            'message'   => $this->request->getPost('message'),
            'rating'    => $this->request->getPost('rating'),
            'photo'     => $photoName,
            'status'    => 'approved'
        ]);

        return redirect()->to(base_url('admin/testimonial?status=all'));
    }

    // =====================================
    // EDIT FORM
    // =====================================
    public function edit($id)
    {
        $this->data['testimonial']  = $this->testimonialModel->find($id);
        $this->data['title']        = 'Edit Testimonial';
        $this->data['search_type']  = 'testimonial';

        return $this->parse('Admin::testimonial_edit', $this->data);
    }

    // =====================================
    // UPDATE
    // =====================================
    public function update($id)
    {
        $testimonial = $this->testimonialModel->find($id);

        $file = $this->request->getFile('photo');
        $photoName = $testimonial['photo'] ?? null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $photoName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/testimonials', $photoName);
        }

        $this->testimonialModel->update($id, [
            'name'      => $this->request->getPost('name'),
            'position'  => $this->request->getPost('position'),
            'message'   => $this->request->getPost('message'),
            'rating'    => $this->request->getPost('rating'),
            'photo'     => $photoName
        ]);

        return redirect()->to(base_url('admin/testimonial?status=all'));
    }

    // =====================================
    // APPROVE
    // =====================================
    public function approve($id)
    {
        $this->testimonialModel->update($id, ['status' => 'approved']);

        return redirect()->to(base_url('admin/testimonial?status=all'))
            ->with('success', 'Testimonial berhasil di-approve.');
    }

    // =====================================
    // REJECT
    // =====================================
    public function reject($id)
    {
        $this->testimonialModel->update($id, ['status' => 'rejected']);

        return redirect()->to(base_url('admin/testimonial?status=all'))
            ->with('success', 'Testimonial berhasil di-reject.');
    }

    // =====================================
    // DELETE
    // =====================================
    public function delete($id)
    {
        $testimonial = $this->testimonialModel->find($id);

        if ($testimonial && !empty($testimonial['photo'])) {
            $path = FCPATH . 'uploads/testimonials/' . $testimonial['photo'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->testimonialModel->delete($id);

        return redirect()->to(base_url('admin/testimonial?status=all'));
    }

    // =====================================
    // BULK DELETE
    // =====================================
    public function bulkDelete()
    {
        $ids = $this->request->getPost('ids');

        if (!$ids || !is_array($ids)) {
            return redirect()->back()->with('success', 'Tidak ada item yang dipilih.');
        }

        $testimonialModel = new \App\Models\TestimonialModel();
        $testimonialModel->whereIn('id', $ids)->delete();

        return redirect()->back()->with('success', 'Testimonial terpilih berhasil dihapus.');
    }
}
