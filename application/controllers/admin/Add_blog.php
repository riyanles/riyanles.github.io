<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_blog');
	}
	public function index()
	{	
		$data['portfolio'] = $this->m_blog->GetBlog();
		$this->template->load('admin/static','admin/add_blog',$data);		
	}

	public function add()
	{
		if ($_POST) 
		{

            $data = array(
                'judul' => $_POST['judul'],
                'desc' => $_POST['description'],
                'img' => $this->_uploadImage()
                 
            );
            	if (empty($judul)) 
            	{
	                $user_id = $this->m_blog->insert($data, 'db_portfolio');
	                $this->session->set_flashdata('msg', 'added Successfully');
	                redirect(base_url('index.php/admin/blog'));
            	} 
            	else 
            	{
                $this->session->set_flashdata('error_msg', 'already exist, try another');
                redirect(base_url('admin/blog'));
            	}
        }    

	}

	private function _uploadImage()
		{
		    $data = array(
		        'img' =>$this->input->post('judul')
		    );
		    $config['upload_path']          = './assets/img/portfolio/app-marketing/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf';
		    $config['file_name']            = $this->input->post('judul');
		    $config['max_size']             = 11024; // 1MB
		    //$config['max_width']            = 5000;
		    //$config['max_height']           = 5000;

		    $this->load->library('upload', $config);
		    $source             = "./assets/img/portfolio/app-marketing/".$data['file_name'] ;
		    if ($this->upload->do_upload('image')) {
		        return $this->upload->data("file_name");
		    }
		    print_r($this->upload->display_errors());
		    return "default.jpg";
		}

	public function update($id)
    {
        if ($_POST) {

            $data = array(
                'judul' => $_POST['judul'],
                'desc' => $_POST['description'],
                'img' => $this->_uploadImage()
            );


            $this->m_blog->edit_option($data, $id, 'db_portfolio');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('index.php/admin/blog'));

        }
		
        $data['portfolio'] = $this->m_blog->GetSingleBlogInfo($id);
        $data['main_content'] = $this->load->view('admin/edit_blog', $data, TRUE);
        $this->template->load('admin/static','admin/edit_blog',$data);
        
    }	

    public function delete($id)
    {
        $this->m_blog->delete($id,'db_portfolio'); 
        $this->session->set_flashdata('msg', 'deleted Successfully');
        redirect(base_url('index.php/admin/blog'));
    }

}

/* End of file Add_blog.php */
/* Location: ./application/controllers/admin/Add_blog.php */