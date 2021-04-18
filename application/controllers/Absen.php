<?php

class Absen extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Absen';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('absen/index');
        $this->load->view('templates/footer');
    }
}
