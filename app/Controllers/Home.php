<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Home',
            'page' => 'v_home'
        ];
        return view('v_template_front_end', $data);
    }
    public function berita(): string
    {
        $data = [
            'judul' => 'Berita',
            'page' => 'v_berita'
        ];
        return view('v_template_front_end', $data);
    }
    public function detailberita(): string
    {
        $data = [
            'judul' => 'Berita',
            'page' => 'v_berita_detail'
        ];
        return view('v_template_front_end', $data);
    }
    public function sejarah(): string
    {
        $data = [
            'judul' => 'Sejarah',
            'page' => 'v_sejarah'
        ];
        return view('v_template_front_end', $data);
    }
    public function gallery(): string
    {
        $data = [
            'judul' => 'Gallery',
            'page' => 'v_gallery'
        ];
        return view('v_template_front_end', $data);
    }
}
