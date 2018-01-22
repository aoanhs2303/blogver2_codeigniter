<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$input = $this->input->get('input');
		$ketqua = $this->admin_model->getSearch($input);
		
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

		$data = array('ketqua' => $ketqua, 'side' => $side);
		$this->load->view('home/header.php', $dataheader);
		$this->load->view('home/search_view.php', $data);
		$this->load->view('home/footer.php');
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */