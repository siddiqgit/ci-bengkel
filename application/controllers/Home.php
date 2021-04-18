<?php

class Home extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'SDN PareangKolot | Halaman Login';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
