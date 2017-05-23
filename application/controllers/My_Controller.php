<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}

	public function index()
	{
		$data['err_message'] = "";
		$data['data'] = $this->My_Model->getDataSlider();
		$this->load->view('Home', $data);

	}

	public function about()
	{
		$this->load->view('About');
	}

	public function testimonial()
	{
		$this->load->view('Testimonial');
	}

	public function contact()
	{
		$this->load->view('Contact');
	}

	public function login()
	{
		if($this->session->userdata('isLogin')){
			redirect('My_Controller/admin');
		}else{
			$this->load->view('Login');
		}
	}

	public function logout()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->session->sess_destroy();
			redirect('My_Controller/login');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function komentar()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->readDataKomentar();
		}else{
			redirect('My_Controller/login');
		}
	}

	public function admin()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->load->view('Changepass');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function slider()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->load->view('Slider');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function gallery()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->load->view('Gallery');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function testimonials()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->load->view('Testimonials');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function login_admin(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $isLogin = $this->My_Model->loginadmin($username, $password);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $password
	    	);    

	    if($isLogin==true){
	    	$this->session->set_userdata('isLogin', TRUE);
	    	if($_SESSION['isLogin']==true){
	    		// $this->session->set_userdata('akses',TRUE);
		    	$this->session->set_userdata('username', $username);

		    	redirect('My_Controller/komentar');
	    	}
	    	else{
	    		echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
	  			$this->load->view('Login');
	    	}
    	
    	}else{
	  		echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
	  		$this->load->view('Login');
		}
	}
	
	public function changepassword(){
	    $username = 'admin';
	    $passwordbaru = $this->input->post('passbaru');
	    $passwordlama = $this->input->post('passlama');
	    $isLogin = $this->My_Model->changepass($username, $passwordlama);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $passwordlama
	    	); 

	    if($isLogin==true){ //kalo datanya ketemu = berhasil login
	    	$this->session->set_userdata('isLogin', TRUE); //kasih session namanya isLogin, set to true
	    	if($passwordbaru==$passwordlama){ //kalo input pass baru dan lama itu sama
	    		echo "<script> alert('Password baru yang anda masukkan sama dengan password lama!') </script>";
	  			$this->load->view('Changepass');
	    	}
	    	else if($_SESSION['isLogin']==true){ //kalo session isLogin true (berarti udah berhasil login)
		    	$this->session->set_userdata('username', $username); //set session pake nama username
				$pass = $this->My_Model->getPassword($username, $passwordlama); //ngecek password lama di input apakah sama dengan password di database
				if($pass == true){ //kalo data ketemu = passwordnya sama, baru bisa di update passwordnya
					$update = $this->My_Model->updatePassword($_SESSION['username'], $passwordbaru);
			    	redirect('My_Controller/admin');

				}else{
					echo "<script> alert('Password lama yang anda masukkan salah!') </script>";
	  				$this->load->view('Changepass');
				} 
	    	}   	
	    }else{
	  		echo "<script> alert('Password lama yang anda masukkan salah!') </script>";
	  		$this->load->view('Changepass');
		}
	}	

	public function readDataKomentar() {
	    $data = $this->My_Model->getDataKomentar();
	    $this->load->view('Komentar', array('data' => $data));
  	}

  	public function readDataSlider() {
	    
	    $this->load->view('Slider');
  	}

  	public function readDataGallery() {
	    $data = $this->My_Model->getDataGallery();
	    $this->load->view('Gallery', array('data' => $data));
  	}

  	public function readDataTestimonials() {
	    $data = $this->My_Model->getDataTestimonials();
	    $this->load->view('Testimonials', array('data' => $data));
  	}

  	public function create() {
	     $data = array(
	            'Name' => $this->input->post('Name'),
	            'Email' => $this->input->post('Email'),
	            'People' => $this->input->post('People'),
	            'Date' => $this->input->post('Date'),
	            'Message' => $this->input->post('Message')            
	                 
	                );
	    $this->My_Model->addDataKomentar($data);
	    $this->session->set_flashdata('sukses', 'Pertanyaan anda telah berhasil dikirimkan!');
     	$this->email();
	    redirect('My_Controller/index');
    
  }

  	public function createSlider() {
	    $do = $this->doUploadSlider();
	    if($do){
	      $data = array(
	                'caption_slider' => $this->input->post('f_caption_slider'),
	                'gambar_slider' => $do
	                 
	                );
	    $this->My_Model->addDataSlider($data);
    }else{
      	$data['error'] = $do;
    }
    	$this->readDataSlider();
    
  	}  

  	public function doUploadSlider(){
    	$config['upload_path']          = './f_gambar_slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		    $errors = array();
		    $file_name = $_FILES['f_gambar_slider']['name'];
		    $file_size = $_FILES['f_gambar_slider']['size'];
		    $file_tmp = $_FILES['f_gambar_slider']['tmp_name'];
		    $file_type = $_FILES['f_gambar_slider']['type'];
		    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if(empty($errors) == true){
	    move_uploaded_file($file_tmp, "./uploads/".$file_name);
	    return 'uploads/'.$file_name;
    }else{
      	print_r($errors);
    }
  }

  public function delete($ID){
    $where = array('ID_komentar' => $ID);
    $res = $this->My_Model->deleteData('komentar', $where);
    if($res>=1){
      redirect('My_Controller/readDataKomentar');
    }
  }

  public function delete_barang(){
    $item = $this->input->post('komentar');
    $this->My_Model->delete_item_komentar($item);
    redirect('My_Controller/readDataKomentar');
  }

  public function update(){
  	$this->My_Model->getDataAdmin();
    $passwordbaru = $this->input->post('passbaru');
    $update = $this->My_Model->updatePassword($_SESSION['username'], $passwordbaru);
    redirect('My_Controller/admin');
  }

  public function email(){
  	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'ssl://smtp.gmail.com';
	$config['smtp_port'] = '465';
	$config['smtp_timeout'] = '7';
	$config['smtp_user'] = 'fauziamakeup.id@gmail.com';
	$config['smtp_pass'] = 'riesafauzia';
	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['mailtype'] = 'html';
	$config['validation'] = TRUE;
	$this->email->initialize($config);
	// ------------------------------------------------------------
	$this->email->to('fauziamakeup.id@gmail.com');
	$this->email->from('fauziamakeup.id@gmail.com', $this->input->post('Name'));
	$this->email->subject($this->input->post('Email').' - '.$this->input->post('People').' - '.$this->input->post('Date'));
	$this->email->message($this->input->post('Message'));
	$this->email->send();


  }

}
?>