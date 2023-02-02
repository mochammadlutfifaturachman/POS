<?php

namespace App\Models;

use CodeIgniter\Model;


class M_login extends Model
{
    protected $table = 'users';

    public function login($email, $password)
    {
        $row = $this->db->table('users')->getWhere(['email_user' => $email, 'password' => sha1($password)]);
        return $row;
        // return $this->findAll();
    }
}