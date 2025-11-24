<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // biar aman, controller bisa cast ke object kalau perlu
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'title',
        'slug',
        'description',
        'image',
        'author',
        'is_featured',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = false; // karena kita handle manual created_at, updated_at

    /**
     * Ambil postingan yang ditandai featured
     */
    public function getFeatured($limit = 3)
    {
        return $this->where('is_featured', 1)
                    ->orderBy('created_at', 'DESC')
                    ->findAll($limit);
    }
}
