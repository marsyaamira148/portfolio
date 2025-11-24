<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class AdminController extends BaseController
{
    protected $user;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        helper('auth');

        // Ambil data user dari Shield
        if (auth()->loggedIn()) {
            $userModel = new UserModel();
            $loggedUser = auth()->user(); 
            $this->user = $userModel->find($loggedUser->id);
        } else {
            $this->user = null;
        }

        // Pastikan data user bisa diakses di semua view yang extend layout.tpl
        if (isset($this->smarty)) {
            $this->smarty->assign('user', $this->user);
            $this->smarty->assign('base_url', base_url());
        }

        // Juga simpan di $this->data supaya controller turunan bisa akses
        $this->data['user'] = $this->user;
        $this->data['base_url'] = base_url();
    }

    
}
