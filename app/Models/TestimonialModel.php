<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table      = 'testimonials';   // nama tabel
    protected $primaryKey = 'id';

    protected $allowedFields = [
    'name',
    'position',
    'message',
    'rating',
    'photo',
    'status',
    'created_at',
    'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
