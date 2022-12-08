<?php

class Rumah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('warga_model', 'koordinatrumah_model'));
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
         $data['judul'] = 'Daftar Warga';
        $data = array(
            'judul' => 'Marking Rumah',
            'itemwarga' => $this->warga_model->getAll(),
            'itemkoordinat' => $this->koordinatrumah_model->getAll()
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('rumah/index');
        $this->load->view('templates/footer');
    }


    public function create()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            //kita validasi inputnya dulu
            $this->form_validation->set_rules('id', 'Nama Warga', 'trim|required');
            $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
            $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');
            if ($this->form_validation->run() == false) {
                $status = 'error';
                $msg = validation_errors();
            } else {
                $warga = $this->input->post('id');
                $latitude = $this->input->post('latitude');
                $longitude = $this->input->post('longitude');
                if ($this->koordinatrumah_model->create($warga, $latitude, $longitude)) {
                    $status = 'success';
                    $msg = "Data koordinat rumah berhasil disimpan";
                } else {
                    $status = 'error';
                    $msg = "terjadi kesalahan saat menyimpan data rumah";
                }
            }
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $status, 'msg' => $msg)));
        }
    }

    function delete()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            //kita validasi inputnya dulu
            $this->form_validation->set_rules('id_koordinatrumah', 'id koordinat Rumah', 'trim|required');

            if ($this->form_validation->run() == false) {
                $status = 'error';
                $msg = validation_errors();
            } else {
                $id = $this->input->post('id_koordinatrumah');
                if ($this->koordinatrumah_model->delete($id)) {
                    $status = 'success';
                    $msg = "Data koordinat jembatan berhasil dihapus";
                } else {
                    $status = 'error';
                    $msg = "terjadi kesalahan saat menghapus data jembatan";
                }
            }
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $status, 'msg' => $msg)));
        }
    }
}
