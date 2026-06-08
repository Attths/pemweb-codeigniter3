<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';

    // READ: ambil semua data, terbaru di atas
    public function getAll()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get($this->table)
            ->result();
    }

    // READ: ambil satu data berdasarkan id
    public function getById($id)
    {
        return $this->db
            ->get_where($this->table, ['id' => $id])
            ->row();
    }

    // CREATE
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // UPDATE
    public function update($id, $data)
    {
        return $this->db
            ->where('id', $id)
            ->update($this->table, $data);
    }

    // DELETE
    public function delete($id)
    {
        return $this->db
            ->where('id', $id)
            ->delete($this->table);
    }
}