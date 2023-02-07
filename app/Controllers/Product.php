<?php

namespace App\Controllers;

use App\Models\M_product;

class Product extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->m_product = model(M_product::class);
    }

    public function index()
    {
        $data_product = $this->m_product->data();
        $data_lowStock = $this->m_product->data_lowStock();
        $data_expiredDate = $this->m_product->data_expiredDate();


        $data = [
            'content'   => 'v_productManagement',
            'title'     => 'Product'
        ];

        return view('layout/wrapper', $data);
    }
}
