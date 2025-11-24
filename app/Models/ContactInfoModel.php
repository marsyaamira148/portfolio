<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactInfoModel extends Model
{
    protected $table      = 'contact_info';
    protected $primaryKey = 'id';

    protected $allowedFields = ['address', 'phone', 'email', 'website'];

    public function getInfo()
    {
        return $this->first(); // ambil data pertama (karena biasanya cuma 1 row)
    }
}
