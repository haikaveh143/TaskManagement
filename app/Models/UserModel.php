<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users1';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'full_name',
        'email',
        'password',
        'created_at'
    ];
}