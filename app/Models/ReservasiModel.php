<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table = 'reservasi';

    public function getReservasi($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pemesanan' => $id]);
        }
    }

    public function saveReservasi($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateReservasi($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_pemesanan' => $id));
        return $query;
    }

    public function deleteReservasi($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_pemesanan' => $id));
        return $query;
    }
}
