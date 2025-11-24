<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Shield\Models\UserIdentityModel;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class RegisterController extends BaseController
{
    public function registerAction()
    {
        $validation = service('validation');
        $validation->setRules([
            'username'         => 'required|min_length[3]|is_unique[users.username]',
            'email'            => 'required|valid_email|is_unique[auth_identities.secret]',
            'password'         => 'required|min_length[6]',
            'password_confirm' => 'matches[password]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors())
                ->with('show_register', true);
        }

        // Simpan ke tabel users
        $shieldUserModel = new ShieldUserModel();
        $user = new User([
            'username' => $this->request->getPost('username'),
            'active'   => 1
        ]);

        $shieldUserModel->save($user);
        $userId = $shieldUserModel->getInsertID();

        // Simpan ke tabel auth_identities
        $identityModel = new UserIdentityModel();
        $identityModel->insert([
            'user_id' => $userId,
            'type'    => 'email_password',
            'secret'  => $this->request->getPost('email'),
            'secret2' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('message', 'Registration successful! You can now sign in.');
    }
}
