<?php
	class Upload extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}

		public function index() {
			$this->load->view('upload_form', array('error_1301164203' => ' '));
		}

		public function do_upload() {
			$config['upload_path']		= './images/';
			$config['allowed_types']	= 'jpg';
			$config['max_size']			= 500;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}

			else {
				$this->load->view('upload_form', array('error_1301164203' => 'Upload Berhasil!'));
			}
		}
	}
?>