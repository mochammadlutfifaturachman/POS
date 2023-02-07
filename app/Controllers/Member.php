<?php

namespace App\Controllers;

use App\Models\M_member;

class Member extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->m_member = model(M_member::class);
    }

    public function index()
    {
        $data_member = $this->m_member->data();

        dd($data_member->getResult());
        die();
        $data = [
            'content'   => 'v_member',
            'title'     => 'Member'
        ];

        return view('layout/wrapper', $data);
    }
}
