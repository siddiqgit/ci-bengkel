<?php

class Hutang extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Hutang';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('hutang/index');
        $this->load->view('templates/footer');
    }
}
