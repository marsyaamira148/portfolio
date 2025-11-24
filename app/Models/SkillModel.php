<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'description', 'category'];
}
