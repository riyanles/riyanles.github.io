<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_header');
		$this->load->helper('url');
	}

	public function index()
	{
		// $data['header'] = $this->m_header->GetHeader();
		// $data['about'] = $this->m_header->GetAbout();
		// $data['portfolio'] = $this->m_header->GetPortfolio();
		$this->template->load('index','main_content');
	}

	public function about()
	{
		
		$this->template->load('about','main_content');
	}

	public function shop()
	{
		
		$this->template->load('shop','main_content');
	}

	public function contact()
	{
		
		$this->template->load('contact','main_content');
	}
	

	public function add()
	{
		if ($_POST) 
		{

            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'tlp' => $_POST['tlp'],
                'message' => $_POST['message']
                 
            );
            	if (empty($name)) 
            	{
	                $user_id = $this->m_blog->insert($data, 'db_contact');
	                $this->session->set_flashdata('msg', 'send Successfully');
	                redirect(base_url('home'));
            	} 
            	else 
            	{
                $this->session->set_flashdata('error_msg', 'already exist, try another');
                redirect(base_url('home'));
            	}
        }    

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */