<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'last_name', 'nickname', 'email', 'password', 'profile_id', 'baja'];
}