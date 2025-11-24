<?php
namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\UserModel;

class ProfileController extends AdminController
{
    public function index()
    {
        $userId = auth()->id();

        if (!$userId) {
            return redirect()->to(base_url('login'))->with('error', 'Silakan login terlebih dahulu.');
        }

        $userModel = new UserModel();
        $user = $userModel->find($userId);

        if (!$user) {
            return redirect()->to(base_url('admin/dashboard'))->with('error', 'User tidak ditemukan.');
        }

        $this->data['user'] = $user;
        $this->data['page_title'] = "My Profile";
        $this->data['base_url'] = base_url() . '/';

        return $this->parse('Admin::profile', $this->data);
    }

    public function update()
    {
        $userId = auth()->id();

        if (!$userId) {
            return redirect()->to(base_url('login'))->with('error', 'Silakan login terlebih dahulu.');
        }

        $userModel = new UserModel();

        $dateOfBirth = $this->request->getPost('date_of_birth');

        $data = [
            'full_name'     => $this->request->getPost('full_name'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
            'address'       => $this->request->getPost('address'),
            'bio'           => $this->request->getPost('bio'),
            'date_of_birth' => $dateOfBirth ?: null,
            'updated_at'    => date('Y-m-d H:i:s')
        ];

        $avatar = $this->request->getFile('avatar');
        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $newName = $avatar->getRandomName();
            $avatar->move(FCPATH . 'uploads/profile', $newName);
            $data['avatar'] = $newName;
        }

        $userModel->update($userId, $data);

        return redirect()->to(base_url('admin/profile'))->with('success', 'Profile updated successfully.');
    }
}
