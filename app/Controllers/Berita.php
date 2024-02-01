<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class Berita extends BaseController
{

    public function __construct() {
        $this->ModelBerita = new ModelBerita();
    }

    public function index()
    {
        $data = [
            'judul' => 'Berita',
            'page' => 'berita/v_index',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input Berita',
            'page' => 'berita/v_input',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_template_back_end', $data);
    }
    public function simpan()
    {
        $this->ModelBerita->save(
            [
                'id_berita'       => $this->request->getVar('id_berita'),
                'judul_berita'       => $this->request->getVar('judul_berita'),
                'isi_berita'      => $this->request->getVar('isi_berita'),
                'gambar_berita'    => $this->request->getVar('gambar_berita'),
                'tgl_berita'     => $this->request->getVar('tgl_berita'),
                'jam'     => $this->request->getVar('jam')
            ]);
  
        return redirect() ->to ('berita');
    }
    
    public function edit ($id_berita)
    {
        $data = [
            'judul' => 'Edit Berita',
            'page' => 'berita/v_edit',
            'berita' => $this->ModelBerita->get($id_berita),
        ];
        return view('v_template_back_end', $data);
    }
        
}
