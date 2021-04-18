<?php

class User extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Data Pengguna';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }
}
