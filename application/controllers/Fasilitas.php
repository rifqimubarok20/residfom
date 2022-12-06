<?php
    class Fasilitas extends CI_Controller {
        
        public function __construct() {
            parent:: __construct();
            $this->load->model('Fasilitas_model');
        }

        public function index() {
            $data['judul'] = 'Daftar Fasilitas Dipinjam';
            $data['fasilitas'] = $this->Fasilitas_model->getAllFasilitas(5, 0);

            if ($this->input->post('keyword')) {
                $data['fasilitas'] = $this->Fasilitas_model->searchDataFasilitas();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('fasilitas/index', $data);
            $this->load->view('templates/footer');
        }

        public function create() {
            $data['judul'] = 'Tambah Data Fasilitas';

            $this->form_validation->set_rules('nama_peminjam', 'Nama Peminjam', 'required|max_length[35]');
            $this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas yang Dipinjam', 'required|max_length[35]');
            $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
            $this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('fasilitas/create');
                $this->load->view('templates/footer');            
            }else {
                $this->Fasilitas_model->createDataFasilitas();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('fasilitas');
            }
        }

        public function delete($id) {
            $this->Fasilitas_model->deleteDataFasilitas($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('fasilitas');
        }

        public function detail($id) {
            $data['data'] = 'Detail Data Fasilitas';
            $data['fasilitas'] = $this->Fasilitas_model->getFasilitasById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('fasilitas/detail');
            $this->load->view('templates/footer');
        }

        public function update($id) {
            $data['judul'] = 'Update Data Fasilitas';
            $data['fasilitas'] = $this->Fasilitas_model->getFasilitasById($id);

            $this->form_validation->set_rules('nama_peminjam', 'Nama Peminjam', 'required|max_length[35]');
            $this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas yang Dipinjam', 'required|max_length[35]');
            $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
            $this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('fasilitas/update');
                $this->load->view('templates/footer');            
            }else {
                $this->Fasilitas_model->updateDataFasilitas();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('fasilitas');
            }
        }
    }
?>