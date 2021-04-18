<?php

class Transaksi extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Transaksi';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index');
        $this->load->view('templates/footer');
    }
}
