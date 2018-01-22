<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailerAutoload.php');

class Home extends CI_Controller {
	private $postPerPage;

	public function __construct()
	{
		parent::__construct();
		$this->postPerPage = 4;
		$this->load->model('admin_model');
	}

	public function index()
	{
		$numOfPage = $this->admin_model->countPage('post');
		$baiviet = $this->admin_model->getTrangIndex($this->postPerPage,'post');
		$baito = $this->admin_model->getBaiVietById(127);

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

		$side = $this->load->view('home/side.php', $dataside, TRUE);
		$blogname = 'BLOG';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);
		

		$data = array('baiviet' => $baiviet, 'baito' => $baito, 'sotrang' => $numOfPage, 'side' => $side);
		$this->load->view('home/header.php', $dataheader);
		$this->load->view('home/index.php', $data);
		$this->load->view('home/footer.php');
	}

	public function xemchitiet($id)
	{
		$motbai = $this->admin_model->getBaiVietById($id);

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

		$comment = $this->admin_model->getCommentByPostId($id);
		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'BLOG';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$data = array('baiviet' => $motbai, 'side' => $side, 'binhluan' => $comment);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('home/fullblog.php', $data);
		$this->load->view('home/footer.php');



	}

	public function page($page)
	{
		$numOfPage = $this->admin_model->countPage('post');
		$baiviet = $this->admin_model->getBaiVietTrenMotTrang($page,$this->postPerPage);
		$baito = $this->admin_model->getBaiVietById(127);
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
		$data = array('baiviet' => $baiviet, 'baito' => $baito, 'sotrang' => $numOfPage, 'side' => $side);

		$duan = $this->admin_model->getAllDuAn();
		$blogname = 'BLOG';
		$dataheader = array('duan' => $duan, 'blogname' => $blogname);

		$this->load->view('home/header.php', $dataheader);
		$this->load->view('home/index.php', $data);
		$this->load->view('home/footer.php');
	}

	public function comment()
	{
		$idbaiviet = $this->input->post('post_id');
		$username = $this->input->post('user');
		$noidung = $this->input->post('comment');
		$page = 'post';
		$this->admin_model->insertComment($username,$noidung,$idbaiviet, $page);
	}

	public function gopY()
	{

        $emailAddress = $_POST['emailaddress'];
        $content = $_POST['gopy'];
        $mail = new PHPMailer;
        
        //$mail->isSMTP(); // Mở cái này lên là lỗi nữa  

        //Set SMTP host name         
        $mail->CharSet = 'UTF-8';
                            
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;                          
        //Provide username and password     
        $mail->Username = "trannhulucs2303@gmail.com";                 
        $mail->Password = "jwxiksinsogpmzcm";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";                           
        //Set TCP port to connect to 
        $mail->Port = 587;                                   
    
        $mail->From = "trannhulucs2303@gmail.com";
        $mail->FromName = "Quản trị Web AoAnhs2303.tk";
    
        $mail->addAddress($emailAddress, "AoAnhs2303");
        $mail->addAddress("trannhulucs2303@gmail.com", $emailAddress);
    
        $mail->isHTML(true);
    
        $mail->Subject = 'Góp ý cho trang web aoanhs2303.tk';
        $mail->Body = $content;
        // $mail->AltBody = "This is the plain text version of the email content";
    
        if(!$mail->send()) {
            $_SESSION["ErrorMessage"] = "Mailer Error: " . $mail->ErrorInfo;
            echo "Thất bại";
            echo "<pre>";
            var_dump($mail->ErrorInfo);
            echo "</pre>";
        } else {
            echo "Thành công";
        }
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */