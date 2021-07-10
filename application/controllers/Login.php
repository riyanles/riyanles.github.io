<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		if ($this->session->userdata('isilogin')== TRUE) 
		{
			
			redirect('admin/dasboard','refresh');
		}
		else
		{
		$this->load->view('login');		
		}
	}

	function do_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->m_login->cek_user($username,$password);
				if(count($cek)==1) {
					$this->session->set_userdata(array(
							'isilogin' => TRUE,
							'username' => $username,


					));

					redirect('admin/dasboard','refresh');
				}else{
					$this->session->set_flashdata('gagal', 'Harap Periksa Kembali username dan password');
					$this->load->view('login');
				}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */