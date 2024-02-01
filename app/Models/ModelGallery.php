<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGallery extends Model
{
    protected $table      = 'gallery';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'keterangan', 'foto'];
    protected $useTimestamps = true;

    public function AllData()
    {
        return $this->db->table('tbl_gallery')
        ->get()->getResult();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_gallery')->insert($data);
    }

    public function UpdatedData($data)
    {
      $this->db->table('tbl_gallery')
      ->where('id', $data['id'])
      ->update($data);
    }

    public function DeleteData($data)
    {
      $this->db->table('tbl_gallery')
      ->where('id', $data['id'])
      ->delete($data);
    }
}
