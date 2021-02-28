<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReservasiModel;

class Reservasi extends Controller
{
    public function index()
    {
        $model = new ReservasiModel();
        $data['reservasi'] = $model->getReservasi();
        echo view('view_reservasi', $data);
    }

    public function add_new()
    {
        echo view('add_reservasi');
    }

    public function save()
    {
        $model = new ReservasiModel();
        $data = array(
            'id_pemesanan'  => $this->request->getPost('id_pemesanan'),
            'nama'  => $this->request->getPost('nama'),
            'jk'  => $this->request->getPost('jk'),
            'alamat'  => $this->request->getPost('alamat'),
            'telp'  => $this->request->getPost('telp'),
            'email'  => $this->request->getPost('email'),
            'tgl_rsv'  => $this->request->getPost('tgl_rsv'),
            'jam'  => $this->request->getPost('jam'),
            'jml_org'  => $this->request->getPost('jml_org'),
            'kode_resto'  => $this->request->getPost('kode_resto'),
        );
        $model->saveReservasi($data);
        return redirect()->to(base_url("reservasi"));
    }

    public function edit($id)
    {
        $model = new ReservasiModel();
        $data['reservasi'] = $model->getReservasi($id)->getRow();
        echo view('edit_reservasi', $data);
    }

    public function update()
    {
        $model = new ReservasiModel();
        $id = $this->request->getPost('id_pemesanan');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'jk'  => $this->request->getPost('jk'),
            'alamat'  => $this->request->getPost('alamat'),
            'telp'  => $this->request->getPost('telp'),
            'email'  => $this->request->getPost('email'),
            'jam'  => $this->request->getPost('jam'),
            'jml_org'  => $this->request->getPost('jml_org'),
            'kode_resto'  => $this->request->getPost('kode_resto'),
            'tgl_rsv'  => $this->request->getPost('tgl_rsv'),
        );
        $model->updateReservasi($data, $id);
        return redirect()->to(base_url("reservasi"));
    }

    public function delete($id)
    {
        $model = new ReservasiModel();
        $data['reservasi'] = $model->getReservasi($id)->getRow();
        $model->deleteReservasi($id);
        return redirect()->to(base_url("reservasi"));
    }
}
