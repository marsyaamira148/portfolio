<?php
namespace App\Controllers;

use App\Models\VisitorModel;

class HomeController extends BaseController
{
    public function index()
    {
        $visitorModel = new VisitorModel();

        // Ambil info pengunjung
        $ip = $this->request->getIPAddress();
        $agent = $this->request->getUserAgent()->getAgentString();

        // Simpan ke database
        $visitorModel->insert([
            'ip_address' => $ip,
            'user_agent' => $agent,
        ]);

        // Tampilkan halaman portfolio kamu
        return view('LandingController'); // sesuaikan nama view kamu
    }
}
