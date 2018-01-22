<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{	
		$this->load->view('page/login_view.php');	
	}
	public function xacthuc()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$data = $this->admin_model->authenticationTaiKhoan($user, md5($pass));
		if ($data) {
            $_SESSION["Username"] = $data[0]["username"];
            $this->session->unset_userdata("ErrorMessage");
            redirect(base_url().'admin');
        } else {
        	$_SESSION["ErrorMessage"] = "Incorrect username or password";
        	redirect(base_url().'login');
        }
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */