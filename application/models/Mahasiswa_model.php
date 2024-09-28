<?php

class Mahasiswa_model extends CI_Model {

    // Retrieve all students
    public function getAllMahasiswa() {
        return $this->db->get('mahasiswa')->result_array();
    }

    // Retrieve a single student by ID
    public function getMahasiswaById($id) {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    // Add a new student
    public function tambahDataMahasiswa() {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nis' => $this->input->post('nis', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }

    // Delete a student by ID
    public function hapusDataMahasiswa($id) {
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    // Update student data
    public function ubahDataMahasiswa($id) {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nis' => $this->input->post('nis', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $id); // Use the passed ID
        $this->db->update('mahasiswa', $data);
    }
}
