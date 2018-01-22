<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tailieu extends CI_Controller {

	private $postPerPage;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->postPerPage = 8;
	}

	public function index()
	{
		$baiviet = $this->admin_model->getTrangIndex($this->postPerPage, 'document');
		$sotrang = $this->admin_model->countPage('document');

		/*LOAD DATA TO SIDEBAR*/
		$sopost = $this->admin_model->countPost();
		$sodoc = $this->admin_model->countDocument();
		$sopic = $this->admin_model->countPicture();
		$project = $this->admin_model->getProjectSide();
		$webapp = $this->admin_model->getAllWebApp();
		$trend = $this->admin_model->getTrendPost();
		$danhmuc = $this->admin_model->getDanhMucSide();

		$dataside = array(
			'sopost' => $sopost,
			'sodoc' => $sodoc,
			'sopic' => $sopic,
			'projectside' => $project,
			'webappside' => $webapp,
			'trend' => $trend,
			'danhmucside' => $danhmuc
		);

		/* LOAD DATA TO HEADER */
		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'SHARE';

		$side = $this->load->view('home/side.php', $dataside, TRUE);
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$data = array('tailieu' => $baiviet, 'side' => $side, 'sotrang' => $sotrang);
		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/tailieu_view', $data);
		$this->load->view('home/footer.php');
	}

	public function xemchitiet($id)
	{
		$baiviet = $this->admin_model->getTaiLieuById($id);

		/*LOAD DATA TO SIDEBAR*/
		$sopost = $this->admin_model->countPost();
		$sodoc = $this->admin_model->countDocument();
		$sopic = $this->admin_model->countPicture();
		$project = $this->admin_model->getProjectSide();
		$webapp = $this->admin_model->getAllWebApp();
		$trend = $this->admin_model->getTrendPost();
		$danhmuc = $this->admin_model->getDanhMucSide();

		$dataside = array(
			'sopost' => $sopost,
			'sodoc' => $sodoc,
			'sopic' => $sopic,
			'projectside' => $project,
			'webappside' => $webapp,
			'trend' => $trend,
			'danhmucside' => $danhmuc
		);

		/* LOAD DATA TO HEADER */
		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'SHARE';

		$comment = $this->admin_model->getCommentByDocumentId($id);

		$side = $this->load->view('home/side.php', $dataside, TRUE);
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$data = array('tailieu' => $baiviet, 'side' => $side, 'binhluan' => $comment);
		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/tailieu_chitiet_view', $data);
		$this->load->view('home/footer.php');
	}

	public function comment()
	{
		$idbaiviet = $this->input->post('post_id');
		$username = $this->input->post('user');
		$noidung = $this->input->post('comment');
		$page = 'document';
		$this->admin_model->insertComment($username,$noidung,$idbaiviet,$page);
	}


	public function page($page)
	{
		$numOfPage = $this->admin_model->countPage('document');
		$baiviet = $this->admin_model->getTaiLieuTrenMotTrang($page,$this->postPerPage);

		$side = $this->load->view('home/side.php','', TRUE);
		$sopost = $this->admin_model->countPost();
		$sodoc = $this->admin_model->countDocument();
		$sopic = $this->admin_model->countPicture();
		$project = $this->admin_model->getProjectSide();
		$webapp = $this->admin_model->getAllWebApp();
		$trend = $this->admin_model->getTrendPost();
		$danhmuc = $this->admin_model->getDanhMucSide();

		$dataside = array(
			'sopost' => $sopost,
			'sodoc' => $sodoc,
			'sopic' => $sopic,
			'projectside' => $project,
			'webappside' => $webapp,
			'trend' => $trend,
			'danhmucside' => $danhmuc
		);

		$side = $this->load->view('home/side.php', $dataside, TRUE);
		$data = array('tailieu' => $baiviet, 'sotrang' => $numOfPage, 'side' => $side);

		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'SHARE';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/tailieu_view.php', $data);
		$this->load->view('home/footer.php');
	}

}

/* End of file tailieu.php */
/* Location: ./application/controllers/tailieu.php */