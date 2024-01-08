<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // public function __construct()
    // {
    // }
    public function Beranda()
    {
        $this->load->view('Beranda');
        $this->load->view('Footer');
    }

    public function TentangKami()
    {
        $this->load->view('Tentangkami');
    }

    public function Rafia()
    {
        $this->load->view('Rafia');
        $this->load->view('Footer');
    }

    public function Tikar()
    {
        $this->load->view('Tikar');
        $this->load->view('Footer');
    }

    public function DN()
    {
        $this->load->view('DN');
        $this->load->view('Footer');
    }
}
