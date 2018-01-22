<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Truyen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$duan = $this->admin_model->getAllDuAn();

		$blogname = 'MANGA';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$truyen = $this->admin_model->getAllTruyenTranh();
		$data = array('truyen' => $truyen);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/truyen_view.php', $data);
		$this->load->view('home/footer.php');
	}

	public function xemchitiet($id)
	{
		/*LOAD DATA TO HEADER*/
		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'MANGA';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

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

		$side = $this->load->view('home/side.php', $dataside, TRUE);

		$truyen = $this->admin_model->getTruyenTranhById($id);
		$chapter = $this->admin_model->getChapterByStoreId($id);
		$sochapter = $this->admin_model->countChapter($id);

		$data = array('side' => $side, 'truyen' => $truyen, 'chapter' => $chapter, 'sochuong' => $sochapter);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/chapter_view.php', $data);
		$this->load->view('home/footer.php');
	}

	public function doctruyen($chapter_id)
	{
		/*LOAD DATA TO HEADER*/
		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'MANGA';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$truyen = $this->admin_model->getImageTruyen($chapter_id);
		$tenchapter = $this->admin_model->getTenTruyen($chapter_id);

		$data = array('truyen' => $truyen, 'tentruyen' => $tenchapter);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('addon/truyenfull_view.php', $data);
		$this->load->view('home/footer.php');
	}

}

/* End of file truyen.php */
/* Location: ./application/controllers/truyen.php */