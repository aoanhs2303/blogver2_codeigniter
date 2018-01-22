<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hinhanh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$hinhanh = $this->admin_model->getAllHinhAnh();

		$data = array('hinhanh' => $hinhanh);

		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'PICTURE';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/hinhanh_view.php', $data);
		$this->load->view('home/footer.php');

	}

}

/* End of file hinhanh.php */
/* Location: ./application/controllers/hinhanh.php */