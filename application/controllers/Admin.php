<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function dashboard()
	{
		$this -> load -> model('m_news');
		$this -> load -> model('Fasilitas_model');
		$this -> load -> model('Warga_model');
		$this -> load -> model('Koordinatrumah_model');
        $data["news"] = $this -> m_news -> get_news();
		$data['total_fasilitas'] = $this->Fasilitas_model->total_rows();
		$data['total_warga'] = $this->Warga_model->total_rows();
		$data['total_rumah'] = $this->Koordinatrumah_model->total_rows();

		$this -> load -> view('templates/header');
		$this -> load -> view('templates/sidebar');
		$this -> load -> view('dashboard', $data);
		$this -> load -> view('templates/footer');
	}
}
