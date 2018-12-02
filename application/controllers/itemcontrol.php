<?php

class itemcontrol extends CI_Controller {
	
	public function __construct() {
		parent::__construct();

	// Load form helper library
		$this->load->helper(array('form', 'url'));

	// Load form validation library
		$this->load->library('form_validation');

	// Load session library
		$this->load->library('session');

	// Load database
		$this->load->database();
	}

	public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
