<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Dashboard Admin',
            'page' => 'vb_home'
        ];
        return view('v_template_back_end', $data);
    }
}
