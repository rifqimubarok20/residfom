<?php

class News extends CI_Controller {
    public function detail($slug) {
		$this -> load -> model('m_news');
        $data["news_item"] = $this -> m_news -> get_news($slug);

		$this -> load -> view('templates/header');
		$this -> load -> view('templates/sidebar');
		$this -> load -> view('news/detail', $data);
		$this -> load -> view('templates/footer');
	}

	public function create() {
        $title = $this -> input -> post('title');
		$body = $this -> input -> post('body');

		$data = array (
			'title'	=> $title,
			'body'	=> $body
		);
		$this -> m_news -> save_news($data, 'tb_news');
		redirect('admin/dashboard');
	}

	public function delete($id) {
		$where = array('id' => $id);
		$this -> m_news -> delete_news($where, 'tb_news');
		redirect('admin/dashboard');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['news'] = $this -> m_news -> edit_news($where, 'tb_news') -> result();

		$this -> load -> view('templates/header');
		$this -> load -> view('templates/sidebar');
		$this -> load -> view('news/update', $data);
		$this -> load -> view('templates/footer');
	}

	public function update() {
		$id = $this -> input -> post('id');
		$title = $this -> input -> post('title');
		$body = $this -> input -> post('body');

		$data = array(
			'title'	=> $title,
			'body'	=> $body
		);

		$where = array(
			'id'	=> $id
		);

		$this -> m_news -> update_news($where, $data, 'tb_news');
		redirect('admin/dashboard');
	}
}

?>