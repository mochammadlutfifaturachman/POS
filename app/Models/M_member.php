<?php

namespace App\Models;

use CodeIgniter\Model;


class M_member extends Model
{
    protected $table = 'member';

    public function data()
    {
        $row = $this->db->table('member')->get();
        return $row;
        // return $this->findAll();
    }
}
