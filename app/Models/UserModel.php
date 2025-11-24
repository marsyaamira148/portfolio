<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
   protected $allowedFields = [
    'username', 'full_name', 'email', 'phone', 'address',
    'bio', 'date_of_birth', 'avatar', 'status', 'status_message',
    'active', 'last_active', 'created_at', 'updated_at'
];

}
