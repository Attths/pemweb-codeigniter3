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

    public function index()
    {
        $data['title']     = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->mhs->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // aturan validasi
        $this->form_validation->set_rules('nim',     'NIM',     'required');
        $this->form_validation->set_rules('nama',    'Nama',    'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('email',   'Email',   'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            // validasi gagal / form belum disubmit -> tampilkan form
            $data['title']  = 'Tambah Mahasiswa';
            $data['aksi']   = base_url('mahasiswa/create');
            $data['mhs']    = null; // mode tambah
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/form', $data);
            $this->load->view('templates/footer');
        } else {
            // validasi lolos -> simpan
            $data = [
                'nim'     => $this->input->post('nim', TRUE),
                'nama'    => $this->input->post('nama', TRUE),
                'jurusan' => $this->input->post('jurusan', TRUE),
                'email'   => $this->input->post('email', TRUE),
            ];
            $this->mhs->insert($data);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
            redirect('mahasiswa');
        }
    }

    

}