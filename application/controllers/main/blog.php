<?php

class Blog extends Controller {
    function __construct()
    {
        parent::Controller();
        $this->is_logged_in();
        //$this->load->scaffolding('entries');
        
        $this->data['whichpage'] = "blog";
        $this->data['title'] = "My blog Title";
        $this->data['heading'] = "My Blog Heading";
        $this->data['content'] = 'main/blog_view';
        $this->data['query'] = $this->db->get('entries');
        $this->data['temp'] = "kkkk";
        $this->uri_args = $this->uri->uri_to_assoc();
    }

	function index()
	{
	    $data =& $this->data;
		$this->load->view('main/template/include', $data);
	}
	
	function tabs(){
	    $this->load->view('tabs');
	}
	
	function is_logged_in()
	{
	    $is_logged_in = $this->session->userdata('is_logged_in');
	    if(!isset($is_logged_in) || $is_logged_in != true)
	    {
	        redirect('main/home', 'refresh');
	        //echo 'You don\'t have permission to access this page. <a href="'.base_url().'index.php/main/home">Login</a>';
	        //die();
	    }
	    
	}
}