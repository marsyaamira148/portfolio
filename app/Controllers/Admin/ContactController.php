<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\ContactModel;
use Config\Services;

class ContactController extends AdminController
{
    protected $contactModel;
    protected $email;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
        $this->email        = Services::email();
    }

    /**
     * Tampilkan semua pesan kontak
     */
    public function index()
    {
        $this->data['title']    = 'Daftar Pesan Kontak';
         $this->data['search_type'] = "contact";

        // Ambil data dengan pagination 15 per halaman
        $this->data['contacts'] = $this->contactModel
            ->orderBy('created_at', 'DESC')
            ->paginate(15, 'contacts');

        // simpan pager
        $this->data['pager'] = $this->contactModel->pager;

        $this->data['success']  = session()->getFlashdata('success');
        $this->data['error']    = session()->getFlashdata('error');

        return $this->parse('Admin::contact_index', $this->data);
    }

    /**
     * Kirim balasan via email dan update status jadi sudah dibalas
     */
    public function reply($id)
    {
        $contact = $this->contactModel->find($id);

        if (!$contact) {
            return redirect()->back()->with('error', 'Pesan tidak ditemukan ❌');
        }

        $message = $this->request->getPost('message');
        if (empty($message)) {
            return redirect()->back()->with('error', 'Pesan balasan tidak boleh kosong ❌');
        }

        // Konfigurasi email
        $this->email->setTo($contact['email']);
        $this->email->setSubject('Balasan Pesan Anda: ' . $contact['subject']);
        $this->email->setMessage($message);

        if ($this->email->send()) {
            // Update status jadi 1 (sudah dibalas)
            $this->contactModel->update($id, ['status' => 1]);

            return redirect()->to(base_url('admin/contact'))
                ->with('success', 'Balasan berhasil dikirim ✅');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim balasan ❌');
        }
    }

    /**
     * Hapus satu pesan
     */
    public function delete($id)
    {
        $this->contactModel->delete($id);

        return redirect()
            ->back()
            ->with('success', 'Pesan berhasil dihapus ✅');
    }

    /**
     * Hapus beberapa pesan sekaligus
     */
    public function bulkDelete()
    {
        $ids = $this->request->getPost('ids');

        if (!empty($ids) && is_array($ids)) {
            $this->contactModel->whereIn('id', $ids)->delete();
            return redirect()
                ->back()
                ->with('success', count($ids) . ' pesan berhasil dihapus ✅');
        }

        return redirect()
            ->back()
            ->with('error', 'Tidak ada pesan yang dipilih ❌');
    }

    /**
 * Hitung jumlah pesan baru (status = 0)
 */
public function getUnreadCount()
{
    $count = $this->contactModel
        ->where('status', 0) // status 0 = belum dibaca/belum dibalas
        ->countAllResults();

    return $this->response->setJSON(['count' => $count]);
}

    
}
