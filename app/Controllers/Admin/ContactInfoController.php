<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\ContactInfoModel;

class ContactInfoController extends AdminController
{
    protected $contactInfoModel;

    public function __construct()
    {
        $this->contactInfoModel = new ContactInfoModel();
    }

    /**
     * Default -> arahkan ke edit
     */
    public function index()
    {
        return $this->edit();
    }

    /**
     * Tampilkan form edit info kontak
     */
    public function edit()
    {
        // Ambil satu row (kalau belum ada isi default)
        $info = $this->contactInfoModel->first();
        if (!$info) {
            $info = [
                'id'      => 0,
                'address' => '',
                'phone'   => '',
                'email'   => '',
                'website' => '',
            ];
        }

        $this->data['info']      = $info;
        $this->data['success']   = session()->getFlashdata('success');
        $this->data['admin_url'] = base_url('admin/');

        return $this->parse('Admin::contact_info_edit', $this->data);
    }

    /**
     * Simpan/Update info kontak (upsert)
     */
    public function update($id = null)
    {
        $data = [
            'address' => (string) $this->request->getPost('address'),
            'phone'   => (string) $this->request->getPost('phone'),
            'email'   => (string) $this->request->getPost('email'),
            'website' => (string) $this->request->getPost('website'),
        ];

        if (!empty($id) && $this->contactInfoModel->find($id)) {
            $this->contactInfoModel->update($id, $data);
        } else {
            $existing = $this->contactInfoModel->first();
            if ($existing && isset($existing['id'])) {
                $this->contactInfoModel->update($existing['id'], $data);
            } else {
                $this->contactInfoModel->insert($data);
            }
        }

        return redirect()
            ->to(base_url('admin/contact-info'))
            ->with('success', 'Info kontak berhasil diperbarui ✅');
    }
}
