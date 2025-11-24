<?php
namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLoginController;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends ShieldLoginController
{
    public function loginView()
    {
        if (auth()->loggedIn()) {
            return redirect()->to('/admin/dashboard');
        }

        // Kirim session error ke view
        return view('Auth/login', [
            'error' => session('error'),
            'errors' => session('errors'),
            'message' => session('message')
        ]);
    }

    public function loginAction(): RedirectResponse
    {
        // Tangkap error Shield
        try {
            $response = parent::loginAction(); // pakai Shield login
        } catch (\Exception $e) {
            // Jika ada exception, simpan di session agar bisa dilihat
            session()->setFlashdata('error', 'Exception: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }

        // Jika login berhasil, redirect ke dashboard
        if (auth()->loggedIn()) {
            return redirect()->to('/admin/dashboard');
        }

        // Jika gagal, kembalikan error Shield
        $errors = session('errors');
        if ($errors) {
            session()->setFlashdata('error', implode('<br>', (array)$errors));
        }

        return redirect()->back()->withInput();
    }
}
