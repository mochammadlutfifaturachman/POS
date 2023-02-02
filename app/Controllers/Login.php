<?php

namespace App\Controllers;

use App\Models\M_Login;

class Login extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->m_login = model(M_Login::class);
    }

    public function index()
    {
        $data = [
            'content'   => 'v_login',
            'title'     => 'Login'
        ];

        return view('layout/wrapper', $data);
    }

    public function auth()
    {
        $rules = [
            'email'         => 'required|valid_email',
            'password'      => 'required',
        ];

        if ($this->validate($rules)) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $this->m_login->login($email, $password);

            if ($data->getNumRows() > 0) {
                $row = $data->getRow();
                $data = [
                    'id_user'       => $row->id_user,
                    'nama_user'     => $row->nama_user,
                    'email_user'    => $row->email_user,
                    'role'          => $row->role,
                    'is_login'      => true,
                ];
                session()->set($data);

                dd(session()->get());
                // return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('gagal', 'Email atau Password salah!');
                return redirect()->to(base_url('login'));
            }
        } else {
            $data = [
                'validation' => $this->validator,
                'content'   => 'v_login',
                'title'     => 'Login'
            ];

            return view('layout/wrapper', $data);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}