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
		$this->load->view('Home');
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
		}
	}

	public function komentar()
	{
		if($this->session->userdata('isLogin'))
		 {
		 	$this->load->view('Komentar');
		 }
	}

	public function admin()
	{
		 if($this->session->userdata('isLogin'))
		 {
		 	$this->load->view('Changepass');
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

	    	redirect('My_Controller/admin');
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

	public function readDataKomentar() {
    $data = $this->My_Model->getDataKomentar();
    $this->load->view('komentar', array('data' => $data));
  	}

  	public function create() {
      $data = array(
                'Name' => $this->input->post('Name'),
                'Email' => $this->input->post('Email'),
                'People' => $this->input->post('People'),
                'Date' => $this->input->post('Date'),
                'Message' => $this->input->post('Message')            
                 
                );
      $this->My_Model->addData($data);
      $this->session->set_flashdata('sukses', 'Pertanyaan anda telah berhasil dikirimkan!');
      redirect('My_Controller/index');
    
  }

  public function delete($kode_barang){
    $where = array('Name' => $Name);
    $res = $this->My_Model->deleteData('komentar', $where);
    if($res>=1){
      redirect('readDataKomentar');
    }
  }

  public function delete_barang(){
    $delete = $this->input->post('komentar');
    $this->My_Model->delete_item($delete);
    $this->readDataKomentar();
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
	$config['smtp_user'] = 'Nama_Email_Pengirim';
	$config['smtp_pass'] = 'Pass_Email_Pengirim';
	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['mailtype'] = 'html';
	$config['validation'] = TRUE;
	$this->email->initialize($config);
	// ------------------------------------------------------------
	$this->email->to('alamat_tujuan@namadomain.com');
	$this->email->from('admin@asisten-pbw.com','Asisten PBW 2017');
	$this->email->subject('JUDUL EMAIL (Teks)');
	$this->email->message('Isi email ditulis disini');
	$this->email->send();


  }

}
?>