<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_blog');
	}
	public function index()
	{
		// if ($this->session->userdata('isilogin')== TRUE) {
			
		// $this->template->load('admin/static','admin/dasboard');

		// }else{
		// 	redirect('login','refresh');
		// }
		$data['portfolio'] = $this->m_blog->GetBlog();
		$this->template->load('admin/static','admin/v_blog',$data);

	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/admin/Blog.php */