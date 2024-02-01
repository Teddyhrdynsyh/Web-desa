<?php

namespace App\Controllers;

use App\Models\ModelGallery;

class Gallery extends BaseController
{
    public function __construct() {
        $this->ModelGallery = new ModelGallery();
    }

    public function index()
    {
        $data = [
            'judul' => 'Gallery',
            'page' => 'gallery/v_index',
            'gallery' => $this->ModelGallery->AllData(),
        ];
        return view('v_template_back_end', $data);
    }
    public function Input()
    {
        $data = [
            'judul' => 'Input Gallery',
            'page' => 'gallery/v_input',
            'berita' => $this->ModelGallery->AllData(),
        ];
        return view('v_template_back_end', $data);
    }
    public function simpan()
    {
            $db      = \Config\Database::connect();
            $data = [
                'id' =>  $this->request->getVar('id'),
                'keterangan'  => $this->request->getVar('keterangan'),
                'foto'       => $this->request->getVar('foto')
            ];

            $this->ModelGallery->insert($data);
  
        return redirect()->to ('gallery');
    }
    public function table($tableName)
      {
         if (empty($tableName)) {
             throw new DatabaseException('You must set the database table to be used with your query.');
        }

         $className = str_replace('Connection', 'Builder', static::class);
  
            return new $className($tableName, $this);
     }

        
}
