<?php 
class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index() {        
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa(); // Fixed method name for consistency

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data); // Pass $data to the view
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            // Collect data for insertion
            $data = [
                'nama' => $this->input->post('nama', true), // Added 'true' for XSS filtering
                'nis' => $this->input->post('nis', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true) // Include jurusan if needed
            ];

            // Insert data using the model
            $this->Mahasiswa_model->tambahDataMahasiswa($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id) {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id); // Fetch the data by ID
        $data['jurusan'] = ['RPL', 'AKL', P]
    
        // Check if the data exists before passing to the view
        if (empty($data['mahasiswa'])) {
            show_404(); // Handle the case where no data is found
        }
    
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id) {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            // Collect data for insertion
            $data = [
                'nama' => $this->input->post('nama', true), // Added 'true' for XSS filtering
                'nis' => $this->input->post('nis', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true) // Include jurusan if needed
            ];

            // Insert data using the model
            $this->Mahasiswa_model->tambahUbahMahasiswa($data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }
}
