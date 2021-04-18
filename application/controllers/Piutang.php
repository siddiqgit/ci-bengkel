<?php

class Piutang extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Piutang';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('piutang/index');
        $this->load->view('templates/footer');
    }
}
