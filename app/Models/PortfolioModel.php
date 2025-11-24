<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'slug',
        'description',
        'date',
        'thumbnail',
        'project_file',
        'client',
        'category',
        'tools',
        'start_date',
        'end_date',
        'is_featured',   // ✅ dipakai untuk filter tampil di homepage
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;

    /**
     * Ambil semua portfolio dengan pagination
     */
    public function getAllPaginated($perPage = 8, $search = null)
    {
        $builder = $this->select('*');

        if (!empty($search)) {
            $builder->like('title', $search)
                    ->orLike('description', $search);
        }

        return $builder->paginate($perPage);
    }

    /**
     * Ambil satu portfolio berdasarkan ID
     */
    public function getById($id)
    {
        if (empty($id) || !is_numeric($id)) {
            return null;
        }
        return $this->find($id);
    }

    /**
     * Tambah portfolio baru
     */
    public function createPortfolio(array $data)
    {
        return $this->insert($data);
    }

    /**
     * Update portfolio
     */
    public function updatePortfolio($id, array $data)
    {
        if (empty($id) || !is_numeric($id)) {
            return false;
        }
        return $this->update($id, $data);
    }

    /**
     * Hapus portfolio
     */
    public function deletePortfolio($id)
    {
        if (empty($id) || !is_numeric($id)) {
            return false;
        }
        return $this->delete($id);
    }

    /**
     * Ambil portfolio yang ditampilkan di homepage (is_featured = 1)
     */
    public function getFeatured($limit = 8)
    {
        return $this->where('is_featured', 1)
                    ->orderBy('created_at', 'DESC')
                    ->findAll($limit);
    }
    
}
