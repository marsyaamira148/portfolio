<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\PostModel;

class BlogController extends AdminController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    // List semua post
    public function index()
    {
        $posts = $this->postModel
                      ->orderBy('created_at', 'DESC')
                      ->paginate(8);

        // pastikan konsisten object
        foreach ($posts as &$p) {
            if (is_array($p)) {
                $p = (object) $p;
            }
        }

        $this->data['posts']      = $posts;
        $this->data['pager']      = $this->postModel->pager;
        $this->data['page_title'] = "Blog / Posts";
        $this->data['search_type'] = "blog";
        $this->data['base_url']   = base_url();

        return $this->parse('Admin::blog', $this->data);
    }

    // Form tambah post
    public function create()
    {
        $this->data['page_title'] = "Tambah Post";
        $this->data['base_url']   = base_url();

        return $this->parse('Admin::blog_create', $this->data);
    }

    // Simpan post baru
    public function store()
    {
        $title = $this->request->getPost('title');
        $slug  = url_title($title, '-', true);

        // pastikan slug unik
        $originalSlug = $slug;
        $count = 1;
        while ($this->postModel->where('slug', $slug)->first()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // upload gambar ke folder uploads/blog/
        $file     = $this->request->getFile('image');
        $fileName = 'default-thumbnail.jpg';
        $uploadPath = FCPATH . 'uploads/blog/';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $fileName = $file->getRandomName();
            $file->move($uploadPath, $fileName);
        }

        $this->postModel->insert([
            'title'       => $title,
            'slug'        => $slug,
            'description' => $this->request->getPost('description'),
            'image'       => $fileName,
            'author'      => session()->get('username') ?? 'Admin',
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('admin/blog'))->with('success', 'Post berhasil ditambahkan!');
    }

    // Form edit post
    public function edit($id)
    {
        $post = $this->postModel->find($id);

        if (!$post) {
            return redirect()->to(base_url('admin/blog'))->with('error', 'Post tidak ditemukan.');
        }

        if (is_array($post)) {
            $post = (object) $post;
        }

        $this->data['post']       = $post;
        $this->data['page_title'] = "Edit Post";
        $this->data['base_url']   = base_url();

        return $this->parse('Admin::blog_edit', $this->data);
    }

    // Update post
    public function update($id)
    {
        $post = $this->postModel->find($id);

        if (!$post) {
            return redirect()->to(base_url('admin/blog'))->with('error', 'Post tidak ditemukan.');
        }

        if (is_object($post)) {
            $post = (array) $post;
        }

        $slug = url_title($this->request->getPost('title'), '-', true);

        $file       = $this->request->getFile('image');
        $fileName   = $post['image'] ?? 'default-thumbnail.jpg';
        $uploadPath = FCPATH . 'uploads/blog/';

        // upload file baru
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // hapus file lama jika ada
            if (!empty($fileName) && $fileName !== 'default-thumbnail.jpg' && file_exists($uploadPath . $fileName)) {
                unlink($uploadPath . $fileName);
            }

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $fileName = $file->getRandomName();
            $file->move($uploadPath, $fileName);
        }

        // data update
        $dataUpdate = [
            'title'       => $this->request->getPost('title'),
            'slug'        => $slug,
            'description' => $this->request->getPost('description'),
            'image'       => $fileName,
            'author'      => session()->get('username') ?? 'Admin',
            'updated_at'  => date('Y-m-d H:i:s')
        ];

        $dataUpdate = array_filter($dataUpdate, fn($v) => $v !== null && $v !== '');

        if (!empty($dataUpdate)) {
            $this->postModel->update($id, $dataUpdate);
        }

        return redirect()->to(base_url('admin/blog'))->with('success', 'Post berhasil diperbarui!');
    }

    // Hapus post
    public function delete($id)
    {
        $post = $this->postModel->find($id);

        if ($post) {
            if (is_object($post)) {
                $post = (array) $post;
            }

            $uploadPath = FCPATH . 'uploads/blog/';

            if (!empty($post['image']) && $post['image'] !== 'default-thumbnail.jpg' && file_exists($uploadPath . $post['image'])) {
                unlink($uploadPath . $post['image']);
            }

            $this->postModel->delete($id);
        }

        return redirect()->to(base_url('admin/blog'))->with('success', 'Post berhasil dihapus!');
    }


    // ✅ Set featured / unfeatured post untuk One Page
    public function setFeatured($id, $status)
    {
        $post = $this->postModel->find($id);

        if (!$post) {
            return redirect()->to(base_url('admin/blog'))
                             ->with('error', 'Post tidak ditemukan.');
        }

        $this->postModel->update($id, [
            'is_featured' => $status
        ]);

        $pesan = $status == 1 
            ? 'Post berhasil ditampilkan di One Page!' 
            : 'Post berhasil disembunyikan dari One Page!';

        return redirect()->to(base_url('admin/blog'))
                         ->with('success', $pesan);
    }

    public function detail($id)
    {
        $post = $this->postModel->find($id);

        if (!$post) {
            return redirect()->to(base_url('admin/blog'))
                            ->with('error', 'Post tidak ditemukan.');
        }

        // Pastikan post berbentuk object
        if (is_array($post)) {
            $post = (object) $post;
        }

        // Kirim data ke view
        $this->data['post'] = $post;
        $this->data['page_title'] = "Detail Blog";

        // user & base_url sudah otomatis dikirim oleh AdminController
        return $this->parse('Admin::blog_detail', $this->data);
    }


}
