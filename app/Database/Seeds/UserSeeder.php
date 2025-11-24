<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = new UserModel();

        $user = new User([
            'username' => 'admin',
            'email'    => 'admin@example.com',
            'password' => 'admin123',
        ]);

        $users->save($user);

        // Tambahkan role "admin" (kalau pakai roles)
        $user = $users->findById($users->getInsertID());
        $user->addGroup('admin');
    }
}
