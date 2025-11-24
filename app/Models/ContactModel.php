<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contacts';   // tabelnya contacts
    protected $primaryKey = 'id';

   protected $allowedFields = [
    'name',
    'email',
    'subject',
    'message',
    'status',
    'created_at'
];


    protected $useTimestamps = false; // karena created_at sudah auto pakai current_timestamp()

    // Ambil semua pesan, urut terbaru
    public function getAllMessages()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
    public function countUnread()
{
    return $this->where('is_read', 0)->countAllResults();
}

}
