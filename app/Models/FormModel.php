<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'reservasi';

    public function getForm($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pemesanan' => $id]);
        }
    }

    public function saveForm($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
