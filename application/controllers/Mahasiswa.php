<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model, beri alias 'mhs' biar singkat
        $this->load->model('Mahasiswa_model', 'mhs');
    }

    // method index(), create(), edit(), delete() menyusul...
}