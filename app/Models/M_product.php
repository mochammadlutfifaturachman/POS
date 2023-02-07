<?php

namespace App\Models;

use CodeIgniter\Model;


class M_product extends Model
{
    protected $table = 'produk';

    public function data()
    {
        $row = $this->db->table('produk')->get();
        return $row;
        // return $this->findAll();
    }

    public function data_lowStock()
    {
        $row = $this->db->table('produk')->getWhere(['stok <=' => 500]);
        return $row;
        // return $this->findAll();
    }

    public function data_expiredDate()
    {
        $today = date('Y-m-d');
        $row = $this->db->table('produk')->getWhere(['expired_date <' => $today]);
        return $row;
        // return $this->findAll();
    }
}
