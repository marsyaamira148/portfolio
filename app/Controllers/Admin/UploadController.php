<?php

namespace App\Controllers\Admin;

class UploadController extends AdminController
{
    public function index()
    {
        $this->data['page_title'] = "Upload Project";
        return $this->parse('Admin::upload', $this->data);
    }

    public function save()
    {
        $request = service('request');

        $title       = $request->getPost('title');
        $description = $request->getPost('description');
        $date        = $request->getPost('date');

        // Folder upload
        $uploadPath = FCPATH . 'uploads/portfolio/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // Upload thumbnail
        $thumbnailName = null;
        $thumbnail = $this->request->getFile('thumbnail');
        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            $thumbnailName = $thumbnail->getRandomName();
            $thumbnail->move($uploadPath, $thumbnailName);
        }

        // Upload file project (optional)
        $projectFileName = null;
        $projectFile = $this->request->getFile('project_file');
        if ($projectFile && $projectFile->isValid() && !$projectFile->hasMoved()) {
            $projectFileName = $projectFile->getRandomName();
            $projectFile->move($uploadPath, $projectFileName);
        }

        // Simpan ke database
        $db = db_connect();
        $db->table('portfolios')->insert([
            'title'        => $title,
            'description'  => $description,
            'date'         => $date,
            'thumbnail'    => $thumbnailName,
            'project_file' => $projectFileName,
            'created_at'   => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('admin/portfolio'))
                         ->with('success', 'Project berhasil diupload!');
    }
}
