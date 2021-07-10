<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->userdata('isilogin')== TRUE) {
			
		$this->template->load('admin/static','admin/dasboard');

		}else{
			redirect('login','refresh');
		}
	}

}

/* End of file Dasboard.php */
/* Location: ./application/controllers/Dasboard.php */