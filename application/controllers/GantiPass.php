<?php

class GantiPass extends CI_Controller
{
    public function index($nama = '')
    {

        $data['judul'] = 'Ganti Password';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('gantipass/index');
        $this->load->view('templates/footer');
    }
}
