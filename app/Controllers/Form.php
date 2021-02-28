<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;

class Form extends Controller
{
    public function index()
    {
        $model = new FormModel();
        $data['reservasi'] = $model->getForm();
        echo view('hasil', $data);
    }

    public function add_new()
    {
        echo view('add_reservasi');
    }

    public function save()
    {
        $model = new FormModel();
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
        $model->saveForm($data);
        return redirect()->to(base_url("home"));
    }
}
