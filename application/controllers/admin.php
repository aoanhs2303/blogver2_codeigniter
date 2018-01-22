<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include("UploadHandler.php");
include("function.php");


class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		Confirm_Login();
	}

	public function index()
	{
		$baiviet = $this->admin_model->get5BaiViet();
		$tailieu = $this->admin_model->get5TaiLieu();
		$duan = $this->admin_model->getAllDuAn();
		$webapp = $this->admin_model->getAllWebApp();
		$danhmuc = $this->admin_model->get5DanhMuc();
		$danhmuchinh = $this->admin_model->get5DanhMucHinh();

		$data = array(
			'baiviet' => $baiviet, 
			'tailieu' => $tailieu, 
			'duan' => $duan,
			'webapp' => $webapp,
			'danhmuc' => $danhmuc,
			'danhmuchinh' => $danhmuchinh
		);
		$this->load->view('dashboard', $data);

	}

	public function danhmuctin()
	{
		$danhmuc = $this->admin_model->loadDanhMucTin();
		$danhmuc = array("mangDanhmuc" => $danhmuc);
		$this->load->view('page/danhmuc/DanhmucTin', $danhmuc);
	}

	public function themdanhmuctin() 
	{
		$value = $this->input->post('danhmuctin');
		if(!empty($value)) {
			$this->admin_model->insertDanhMucTin($value);
		}
		
	}

	public function suadanhmuc()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$datetime = $this->input->post('datetime');

		$this->admin_model->updateDanhMucTin($id, $name, $datetime);
	}

	public function xoadanhmuc()
	{
		$id = $this->input->post('id');
		$this->admin_model->deleteDanhMucTin($id);
	}



	/***DANH MỤC HÌNH ẢNH**/

	public function danhmuchinh()
	{
		$danhmuc = $this->admin_model->loadDanhMucHinh();
		$danhmuc = array("mangDanhmuc" => $danhmuc);
		$this->load->view('page/danhmuc/DanhmucHinh', $danhmuc);
	}

	public function themdanhmuchinh() 
	{
		$value = $this->input->post('danhmuchinh');
		if(!empty($value)) {
			$this->admin_model->insertDanhMucHinh($value);
		}
		
	}

	public function suadanhmuchinh()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$datetime = $this->input->post('datetime');

		$this->admin_model->updateDanhMucHinh($id, $name, $datetime);
	}

	public function xoadanhmuchinh()
	{
		$id = $this->input->post('id');
		$this->admin_model->deleteDanhMucHinh($id);
	}


	/***DANH MỤC HÌNH ẢNH**/

	public function danhmuctruyen()
	{
		$danhmuc = $this->admin_model->loadDanhMucTruyen();
		$danhmuc = array("mangDanhmuc" => $danhmuc);
		$this->load->view('page/danhmuc/DanhmucTruyen', $danhmuc);
	}

	public function themdanhmuctruyen() 
	{
		$value = $this->input->post('danhmuctruyen');
		if(!empty($value)) {
			$this->admin_model->insertDanhMucTruyen($value);
		}
		
	}

	public function suadanhmuctruyen()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$datetime = $this->input->post('datetime');

		$this->admin_model->updateDanhMucTruyen($id, $name, $datetime);
	}

	public function xoadanhmuctruyen()
	{
		$id = $this->input->post('id');
		$this->admin_model->deleteDanhMucTruyen($id);
	}


	/***QUẢN LÝ HÌNH ẢNH***/

	public function quanlyhinhanh()
	{
		$danhmuchinh = $this->admin_model->getAllDanhMucHinh();
		$hinhanh = $this->admin_model->getAllHinhAnh();
		$data = array('danhmuchinh' => $danhmuchinh, 'hinhanh' => $hinhanh);
		$this->load->view('page/themmoi/hinhanh', $data);
	}

	public function themhinhanh()
	{
		$ten = $this->input->post('tenhinh');
		$danhmuc = $this->input->post('danhmuchinh');
		$urlanh = $this->input->post('urlanh');
		$linkanh = "";

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('linkanh')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$dulieuanh = $this->upload->data(); // chua du thu trong nay
			$linkanh = base_url().'uploads/'.$dulieuanh['file_name'];
		}
		if (empty($linkanh)) {
			$linkanh = $urlanh;
		}

		$this->admin_model->insertHinhAnh($ten, $danhmuc, $linkanh);

	}

	public function suahinhanh()
	{
		$id = $this->input->post('idhinh');
		$name = $this->input->post('namehinh');
		$image = $this->input->post('linkhinh');
		$cate = $this->input->post('catehinh');

		$this->admin_model->updateHinhAnh($id, $name, $cate, $image);
	}

	public function xoahinhanh()
	{
		$id = $this->input->post('idhinhxoa');
		$this->admin_model->deleteHinhAnh($id);
	}

	public function uploadFilePost() 
	{ 
		$dir = 'files/post/';
		$url = base_url() . 'files/post/';
		$options = array ('upload_dir' => $dir, 'upload_url' => $url);
		$uploadfile = new UploadHandler($options); 
	}

	public function uploadFile() 
	{ 
		$uploadfile = new UploadHandler(); 
	}

	/***QUẢN LÝ PROJECT***/
	public function quanlyduan()
	{
		$duan = $this->admin_model->getAllDuAn();
		$data = array('duan' => $duan);
		$this->load->view('page/themmoi/duan', $data);
	}

	public function themduan()
	{
		$ten = $this->input->post('tenduan');
		$link = $this->input->post('linkduan');
		$image = $this->input->post('urlanh');
		$this->admin_model->insertDuAn($ten, $link, $image);
	}

	public function suaduan()
	{
		$id = $this->input->post('idduan');
		$name = $this->input->post('nameduan');
		$link = $this->input->post('linkduan');
		$image = $this->input->post('hinhduan');
		$this->admin_model->updateDuAn($id, $name, $link, $image);
	}

	public function xoaduan()
	{
		$id = $this->input->post('idduanxoa');
		$this->admin_model->deleteDuAn($id);
	}

	/***QUẢN LÝ WEB APPLICATION***/
	public function quanlywebapp()
	{
		$webapp = $this->admin_model->getAllWebApp();
		$data = array('webapp' => $webapp);
		$this->load->view('page/themmoi/webapp', $data);		
	}

	public function themwebapp()
	{
		$ten = $this->input->post('tenwebapp');
		$link = $this->input->post('linkwebapp');
		$image = $this->input->post('urlanh');
		$this->admin_model->insertWebApp($ten, $link, $image);
	}

	public function suawebapp()
	{
		$id = $this->input->post('idwebapp');
		$name = $this->input->post('namewebapp');
		$link = $this->input->post('linkwebapp');
		$image = $this->input->post('hinhwebapp');
		$this->admin_model->updateWebApp($id, $name, $link, $image);
	}

	public function xoawebapp()
	{
		$id = $this->input->post('idwebappxoa');
		$this->admin_model->deleteWebApp($id);
	}

	/***BÀI VIẾT***/
	public function quanlybaiviet()
	{
		$bv = $this->admin_model->getAllBaiViet();
		$dm = $this->admin_model->getAllDanhMucBaiViet();
		$data = array('baiviet' => $bv, 'danhmuc' => $dm);
		$this->load->view('page/themmoi/baiviet', $data);
	}

	public function thembaiviet()
	{
		$ten = $this->input->post('tenbaiviet');
		$url = vn_to_str($this->input->post('tenbaiviet'));
		$danhmuc = $this->input->post('danhmucbaiviet');
		$image = $this->input->post('imagebaiviet');

		$arr = explode('/', $image);

		//$arr = json_encode($arr);
		$tenvakieu = explode('.', $arr[6]);
		$tenfile = $tenvakieu[0];
		$kieu = $tenvakieu[1];

		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= 'files/post/'.$tenfile.'.'.$kieu; // ko lay base_url
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio']	= TRUE;
		$config['master_dim'] = 'height';
		$config['width']      		= 200;
		$config['height'] 			= 200;

		$this->load->library('image_lib', $config);
		$this->image_lib->initialize($config);

		if($this->image_lib->resize()) {
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'files/post/'.$tenfile.'_thumb.'.$kieu;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['master_dim'] = 'height';
			$config['width'] = 200;
			$config['height'] = 200;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);
			$this->image_lib->crop();
		}

		$tomtat = $this->input->post('tomtatbaiviet');
		$noidung = $this->input->post('noidungbaiviet');

		$this->admin_model->insertBaiViet($ten, $url, $danhmuc, $image, $tomtat, $noidung);
	}

	public function suabaiviet($id)
	{
		$motbaiviet = $this->admin_model->getBaiVietById($id);
		$dm = $this->admin_model->getAllDanhMucBaiViet();
		$data = array('baiviet' => $motbaiviet, 'danhmuc' => $dm);
		$this->load->view('page/chinhsua/suabaiviet_view', $data);
	}

	public function suamotbaiviet()
	{	
    	$id = $this->input->post('addID');
    	$name = $this->input->post('addTen');
    	$danhmuc = $this->input->post('addDanhMuc');
    	$tomtat = $this->input->post('addTomTat');
    	$hinhcu = $this->input->post('addHinhCu');
    	$url = $this->input->post('addUrl');
    	$noidung = $this->input->post('addNoiDung');

    	$config['upload_path'] = './files/post/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size']  = '100000';
    	$hinh = "";

    	$this->load->library('upload', $config);
    	
    	if ( ! $this->upload->do_upload('addAnhMoi')){
    		$error = array('error' => $this->upload->display_errors());
    	}
    	else{
    		$data = $this->upload->data();
    		$hinh = base_url() . 'files/post/' . $data['file_name'];
			
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= 'files/post/'. $data['file_name']; // ko lay base_url
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio']	= TRUE;
			$config['master_dim'] = 'height';
			$config['width']      		= 200;
			$config['height'] 			= 200;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);

			if($this->image_lib->resize()) {
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'files/post/'.$data['raw_name'] . '_thumb' . $data['file_ext']; 
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['master_dim'] = 'height';
				$config['width'] = 200;
				$config['height'] = 200;

				$this->load->library('image_lib', $config);
				$this->image_lib->initialize($config);
				$this->image_lib->crop();
			}

    	}
    	if($hinh == "") {
    		$hinh = $hinhcu;
    	} 
    	if($this->admin_model->updateBaiViet($id, $name, $danhmuc, $tomtat, $hinh, $url, $noidung)) {
    		redirect(base_url().'admin/quanlybaiviet');
    	}
	}

	public function xoabaiviet()
	{
		$id = $this->input->post('idbaivietxoa');
		$this->admin_model->deleteBaiViet($id);
	}

	/*** QUẢN LÝ TÀI LIỆU ***/

	public function quanlytailieu()
	{
		$tag = $this->admin_model->getAllTag();
		$doc = $this->admin_model->getAllTaiLieu();
		$data = array("alltag" => $tag, 'tailieu' => $doc);
		$this->load->view('page/themmoi/tailieu', $data);
	}

	public function themtailieu()
	{
		$ten = $this->input->post('tentailieu');
		$capdo = $this->input->post('capdotailieu');
		$tag = $this->input->post('tagtailieu');
		$image = $this->input->post('imagetailieu');
		$link = $this->input->post('linktailieu');
		$content = $this->input->post('noidungtailieu');

		$this->admin_model->insertTaiLieu($ten, $capdo, $tag, $image, $link, $content);
	}

	public function suatailieu($id)
	{
		$tag = $this->admin_model->getAllTag();
		$tl = $this->admin_model->getTaiLieuById($id);
		$data = array("alltag" => $tag, "tailieu" => $tl);
		$this->load->view('page/chinhsua/suatailieu_view', $data);

	}

	public function suamottailieu()
	{	
    	$id = $this->input->post('addID');
    	$name = $this->input->post('addName');

    	$level = $this->input->post('addLevel');
    	$tag = json_encode($this->input->post('tag'));

    	$hinhcu = $this->input->post('addHinhCu');
    	$link = $this->input->post('addLink');
    	$noidung = $this->input->post('addNoiDung');

    	$config['upload_path'] = './files/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size']  = '100000';
    	$hinh = "";

    	$this->load->library('upload', $config);
    	
    	if ( ! $this->upload->do_upload('addAnhMoi')){
    		$error = array('error' => $this->upload->display_errors());
    	}
    	else{
    		$data = $this->upload->data();
    		$hinh = base_url() . 'files/' . $data['file_name'];
    	}
    	if($hinh == "") {
    		$hinh = $hinhcu;
    	} 
    	if($this->admin_model->updateTaiLieu($id, $name, $level, $tag, $hinh, $link, $noidung)) {
    		redirect(base_url().'admin/quanlytailieu');
    	} 
	}

	public function xoatailieu()
	{
		$id = $this->input->post('idtailieuxoa');
		$this->admin_model->deleteTaiLieu($id);
	}


	/*** QUẢN LÝ TAG ***/
	public function quanlytag()
	{
		$tag = $this->admin_model->getAllTag();
		$data = array("mangDanhmuc" => $tag);
		$this->load->view('page/danhmuc/tag', $data);
	}

	public function themtag() 
	{
		$value = $this->input->post('nametag');
		if(!empty($value)) {
			$this->admin_model->insertTag($value);
		}
	}

	public function suatag()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$datetime = $this->input->post('datetime');

		$this->admin_model->updateTag($id, $name, $datetime);
	}

	public function xoatag()
	{
		$id = $this->input->post('id');
		$this->admin_model->deleteTag($id);
	}

	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */