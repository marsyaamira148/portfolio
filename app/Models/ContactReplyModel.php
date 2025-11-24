<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactReplyModel extends Model
{
    protected $table      = 'contact_replies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['contact_id', 'reply_message', 'created_at'];
    protected $useTimestamps = false;
}
