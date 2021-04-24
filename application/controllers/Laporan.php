<?php

class Laporan extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Laporan';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }
}
