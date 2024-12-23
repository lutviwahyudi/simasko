<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'date-of-birth', 'address', 'password', 'profile-picture'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}