<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {

	private $postPerPage;

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->postPerPage = 4;
	}

	public function insertDanhMucTin($danhmuc)
	{
		$data = array('name' => $danhmuc);
		$this->db->insert('category', $data);

		echo json_encode($this->db->insert_id());
	}

	public function loadDanhMucTin()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('category');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	public function updateDanhMucTin($id, $name, $date)
	{
		$this->db->set('name', $name); //value that used to update column  
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('category');  //table name
	}

	public function deleteDanhMucTin($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('category');
	}


	/***DANH MỤC HÌNH ẢNH***/

	public function insertDanhMucHinh($danhmuc)
	{
		$data = array('name' => $danhmuc);
		$this->db->insert('categoryimg', $data);

		echo json_encode($this->db->insert_id());
	}

	public function loadDanhMucHinh()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('categoryimg');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	public function updateDanhMucHinh($id, $name, $date)
	{
		$this->db->set('name', $name); //value that used to update column  
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('categoryimg');  //table name
	}

	public function deleteDanhMucHinh($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('categoryimg');
	}


	/***DANH MỤC TRUYỆN***/

	public function insertDanhMucTruyen($danhmuc)
	{
		$data = array('name' => $danhmuc);
		$this->db->insert('categorymanga', $data);

		echo json_encode($this->db->insert_id());
	}

	public function loadDanhMucTruyen()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('categorymanga');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	public function updateDanhMucTruyen($id, $name, $date)
	{
		$this->db->set('name', $name); //value that used to update column  
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('categorymanga');  //table name
	}

	public function deleteDanhMucTruyen($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('categorymanga');
	}


	/***HÌNH ẢNH***/

	public function getAllDanhMucHinh()
	{
		$this->db->select('*');
		$data = $this->db->get('categoryimg');
		$data = $data->result_array();
		return $data;
	}

	public function getAllHinhAnh()
	{
		$this->db->select('*');
		$data = $this->db->get('picture');
		$data = $data->result_array();
		return $data;
	}

	public function insertHinhAnh($ten, $danhmuc, $link)
	{
		$data = array('name' => $ten, 'kind' => $danhmuc, 'image' => $link);
		$this->db->insert('picture', $data);

		echo json_encode($this->db->insert_id());
	}

	public function updateHinhAnh($id, $ten, $danhmuc, $link) 
	{
		$this->db->set('name', $ten); //value that used to update column  
		$this->db->set('kind', $danhmuc);
		$this->db->set('image', $link);
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('picture');  //table name		
	}

	public function deleteHinhAnh($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('picture');
	}

	/***DỰ ÁN***/

	public function getAllDuAn()
	{
		$this->db->select('*');
		$data = $this->db->get('project');
		$data = $data->result_array();
		return $data;
	}


	public function insertDuAn($ten, $link, $image)
	{
		$data = array('title' => $ten, 'link' => $link, 'image' => $image);
		$this->db->insert('project', $data);

		echo json_encode($this->db->insert_id());
	}

	public function updateDuAn($id, $ten, $link, $image) 
	{
		$this->db->set('title', $ten); //value that used to update column  
		$this->db->set('link', $link);
		$this->db->set('image', $image);
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('project');  //table name		
	}

	public function deleteDuAn($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('project');
	}

	/***WEB APP***/

	public function getAllWebApp()
	{
		$this->db->select('*');
		$data = $this->db->get('web_app');
		$data = $data->result_array();
		return $data;
	}

	public function insertWebApp($ten, $link, $image)
	{
		$data = array('title' => $ten, 'link' => $link, 'image' => $image);
		$this->db->insert('web_app', $data);

		echo json_encode($this->db->insert_id());
	}

	public function updateWebApp($id, $ten, $link, $image) 
	{
		$this->db->set('title', $ten); //value that used to update column  
		$this->db->set('link', $link);
		$this->db->set('image', $image);
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('web_app');  //table name		
	}

	public function deleteWebApp($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('web_app');
	}


	/***BÀI VIẾT***/

	public function getAllBaiViet()
	{
		$this->db->select('*');
		$data = $this->db->get('post');
		$data = $data->result_array();
		return $data;
	}

	public function getAllDanhMucBaiViet($value='')
	{
		$this->db->select('*');
		$data = $this->db->get('category');
		$data = $data->result_array();
		return $data;
	}

	public function getBaiVietById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('post');
		$data = $data->result_array();
		return $data;
	}

	public function insertBaiViet($ten, $url, $danhmuc, $image, $tomtat, $noidung)
	{
		$data = array(
			'title' => $ten,
			'url' => $url,
			'category' => $danhmuc,
			'image' => $image,
			'tomtat' => $tomtat,
			'content' => $noidung 
		);

		$this->db->insert('post', $data);
		echo json_encode($this->db->insert_id());
	}

	public function updateBaiViet($id, $name, $danhmuc, $tomtat, $hinh, $url, $noidung)
	{
		$data = array(
			'title' => $name,
			'category' => $danhmuc,
			'tomtat' => $tomtat,
			'image' => $hinh,
			'url' => $url,
			'content' => $noidung
		);
		$this->db->where('id', $id);
		return $this->db->update('post', $data);
	}

	public function deleteBaiViet($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('post');
	}

	/*** QUẢN LÝ TAG ***/
	public function getAllTag()
	{
		$this->db->select('*');
		$data = $this->db->get('tag');
		$data = $data->result_array();
		return $data;
	}

	public function insertTag($danhmuc)
	{
		$data = array('name' => $danhmuc);
		$this->db->insert('tag', $data);

		echo json_encode($this->db->insert_id());
	}

	public function updateTag($id, $name, $date)
	{
		$this->db->set('name', $name); //value that used to update column  
		$this->db->where('id', $id); //which row want to upgrade  
		return $this->db->update('tag');  //table name
	}

	public function deleteTag($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tag');
	}

	/*** QUẢN LÝ TÀI LIỆU ***/

	public function getAllTaiLieu()
	{
		$this->db->select('*');
		$data = $this->db->get('document');
		$data = $data->result_array();
		return $data;
	}

	public function getTaiLieuById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('document');
		$data = $data->result_array();
		return $data;
	}

	public function insertTaiLieu($ten, $capdo, $tag, $image, $link, $content)
	{
		$data = array(
			'title' 		=> $ten,
			'level' 		=> $capdo,
			'tag' 			=> $tag,
			'image' 		=> $image,
			'link' 			=> $link,
			'description' 	=> $content
		);
		$this->db->insert('document', $data);
		echo json_encode($this->db->insert_id());
	}

	public function updateTaiLieu($id, $name, $level, $tag, $hinh, $link, $noidung)
	{
		$data = array(
			'title' 		=> $name,
			'level' 		=> $level,
			'tag' 			=> $tag,
			'image' 		=> $hinh,
			'link' 			=> $link,
			'description' 	=> $noidung
		);
		$this->db->where('id', $id);
		return $this->db->update('document', $data);
	}

	public function deleteTaiLieu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('document');
	}


	/*** PAGINATION ***/

	public function countPage($kind)
	{
		if ($kind == 'post') {
			$this->db->select('*');
			$kq = $this->db->get('post');
			$kq = $kq->result_array();
			return count($kq) / $this->postPerPage;
		}
		else if($kind == 'document') {
			$this->db->select('*');
			$kq = $this->db->get('document');
			$kq = $kq->result_array();
			return count($kq) / 8; // 8 doc 1 trang
		}
				
	}

	public function getTrangIndex($sotin,$kind)
	{
		if($kind == 'post') {
			$this->db->select('*');
			$ketqua = $this->db->get('post', $sotin, 0);
		} else if($kind == 'document') {
			$this->db->select('*');
			$ketqua = $this->db->get('document', 8, 0);
		}
		
		return $ketqua = $ketqua->result_array();
	}

	public function getBaiVietTrenMotTrang($trang, $sotin)
	{
		$offset = ($trang - 1) * $sotin;
		$this->db->select('*');
		$ketqua = $this->db->get('post', $sotin, $offset);
		return $ketqua = $ketqua->result_array();
	}

	public function getTaiLieuTrenMotTrang($trang, $sotin)
	{
		$offset = ($trang - 1) * $sotin;
		$this->db->select('*');
		$ketqua = $this->db->get('document', $sotin, $offset);
		return $ketqua = $ketqua->result_array();
	}

	/*** SIDE BAR ***/
	public function getProjectSide()
	{
		$this->db->select('*');
		$data = $this->db->get('project', 4);
		$data = $data->result_array();
		return $data;
	}

	public function getTrendPost()
	{
		$this->db->select('*');
		$this->db->where('trend', 'true');
		$data = $this->db->get('post');
		$data = $data->result_array();
		return $data;
	}

	public function getDanhMucSide()
	{
		$this->db->select("category, count(category) as num");
		$this->db->from("post");
		$this->db->group_by("category");
		$data = $this->db->get();

		$data = $data->result_array();
		return $data;
	}

	public function countPost()
	{
		$this->db->select('*');
		$kq = $this->db->get('post');
		$kq = $kq->result_array();
		return count($kq);
	}
	public function countDocument()
	{
		$this->db->select('*');
		$kq = $this->db->get('document');
		$kq = $kq->result_array();
		return count($kq);
	}

	public function countPicture()
	{
		$this->db->select('*');
		$kq = $this->db->get('picture');
		$kq = $kq->result_array();
		return count($kq);
	}

	/*** COMMENT ***/

	public function getCommentByPostId($postid)
	{
		$this->db->select('*');

		$dieukien = array('post_id' => $postid, 'page' => 'post');

		$this->db->where($dieukien);
		$data = $this->db->get('comments');
		return $data = $data->result_array();
	}

	public function getCommentByDocumentId($postid)
	{
		$this->db->select('*');

		$dieukien = array('post_id' => $postid, 'page' => 'document');

		$this->db->where($dieukien);
		$data = $this->db->get('comments');
		return $data = $data->result_array();
	}


	public function insertComment($username,$noidung,$idbaiviet,$page)
	{
		$data = array(
			'user' => $username,
			'comment' => $noidung,
			'post_id' => $idbaiviet,
			'page' => $page
		);
		$this->db->insert('comments', $data);

		echo json_encode($this->db->insert_id());
	}

	/*** PHÂN TRANG CHO TÀI LIỆU ***/

	/*** TRUYỆN TRANH ***/
	public function getAllTruyenTranh()
	{
		$this->db->select('*');
		$data = $this->db->get('store');
		$data = $data->result_array();
		return $data;
	}

	public function getTruyenTranhById($store_id)
	{
		$this->db->select('*');
		$this->db->where('store_id', $store_id);
		$data = $this->db->get('store');
		$data = $data->result_array();
		return $data;	
	}
	public function getChapterByStoreId($store_id)
	{
		$this->db->select('*');
		$this->db->where('store_id', $store_id);
		$data = $this->db->get('chapter');
		$data = $data->result_array();
		return $data;
	}
	public function countChapter($store_id)
	{
		$this->db->select('*');
		$this->db->where('store_id', $store_id);
		$data = $this->db->get('chapter');
		$data = $data->result_array();
		$data = count($data);
		return $data;
	}
	public function getImageTruyen($chapter_id)
	{
		$this->db->select('*');
		$this->db->where('chapter_id', $chapter_id);
		$data = $this->db->get('image');
		$data = $data->result_array();
		return $data;
	}

	public function getTenTruyen($chapter_id)
	{
		$this->db->select('chapter.chapter_name as cname, store.store_name as sname');
		$this->db->join('chapter', 'chapter.store_id = store.store_id');
		$dieukien = array('chapter.chapter_id' => $chapter_id);
		$this->db->where($dieukien);
		$data = $this->db->get('store');
		$data = $data->result_array();
		return $data;
	}

	/*** SEARCH ***/
	public function getSearch($input)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->or_like('post.title', $input);
		$this->db->or_like('post.category', $input);
		$this->db->or_like('post.content', $input);

		$data = $this->db->get();
		$data = $data->result_array();
		return $data;
	}

	/*** TRANG INDEX ADMIN ***/
	public function get5BaiViet()
	{
		$this->db->select('*');
		$this->db->order_by('datetime', 'desc');
		$data = $this->db->get('post', 5);
		$data = $data->result_array();
		return $data;
	}
	public function get5TaiLieu()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('document', 5);
		$data = $data->result_array();
		return $data;
	}
	public function get5DanhMuc()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('category', 5);
		$data = $data->result_array();
		return $data;
	}
	public function get5DanhMucHinh()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('categoryimg', 5);
		$data = $data->result_array();
		return $data;
	}

	public function authenticationTaiKhoan($user, $pass)
	{
		$this->db->select('*');
		$px = md5($pass);
		$dieukien = array('username	' => $user);
		$this->db->where($dieukien);
		$data = $this->db->get('admin');

		$data = $data->result_array();

		if(count($data) == 1) {
			return $data;
		} else {
			return null;
		}
	}
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */