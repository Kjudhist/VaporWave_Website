<?php

class logincontrol extends CI_Controller {
	
	public function __construct() {
		parent::__construct();

	// Load form helper library
		$this->load->helper('form');

	// Load form validation library
		$this->load->library('form_validation');

	// Load session library
		$this->load->library('session');

	// Load database
		$this->load->model('loginmodel');
		$this->load->database();
	}

	public function index() {
		$this->load->helper('url');
		$this->load->view('login2');
	}

	public function login_authentication(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('dashboard');
			}else{
				$this->load->view('login2');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
			$result = $this->loginmodel->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->loginmodel->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'sandi' => $result[0]->sandi,
						'email' => $result[0]->email,
						'birthdate'=>$result[0]->birthdate,
						'blog'=>$result[0]->blog,
						'foto'=>$result[0]->foto,
						'phone'=>$result[0]->phone
						);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('dashboard');
				}

			} else {
				$data = array(
					'error_message' => 'Invalid username or Password'
					);
				$this->load->view('login2', $data);
			}
		}
	}

	public function register_page(){
		
// Check validation for user input in SignUp form
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login2');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'sandi' => $this->input->post('pass')
				);
			$result = $this->loginmodel->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully!';
				$this->load->view('login2', $data);
			} else {
				echo "<script type='text/javascript'>alert('username already exist');</script>";
				$this->load->view('login2', $data);
			}
		}
	}

	public function logout() {

	// Removing session data
		$sess_array = array(
			'email' => ''
			);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login2', $data);
	}

	public function upload_page(){
		$this->load->view('upload');
	}

	public function do_upload() {
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']				= '9999999999';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			echo '<script type="text/javascript">alert("'.$img.'");</script>';
			$this->load->view('dashboard', $data);
		}
	}
}
