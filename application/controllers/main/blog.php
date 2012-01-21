<?php

class Blog extends Controller {

    function Blog()
    {
        parent::Controller();
        //$this->load->scaffolding('entries');
        //$this->load->helper('url');
        //$this->load->helper('form');
        
        //$this->load->scaffolding('entries');
        $this->data['headers'] = array('main/template/header_1');
        $this->data['content'] = 'main/template/content_blog';
        $this->data['header_menu_select'] = 'Blog';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Blog";
        //$this->data['query'] = $this->db->get('entries');
        $this->uri_args = $this->uri->uri_to_assoc();
        
        //$this->is_logged_in();
    }
    
    function is_logged_in2()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('main/home', 'refresh');
            //echo 'You don\'t have permission to access this page. <a href="'.base_url().'index.php/main/home">Login</a>';
            //die();
        }
         
    }
    
    public function index() {
        
        if($user = Current_User::user()){
            $data =& $this->data;
            $data['categories'] = Doctrine::getTable('Category')->findAll();
            $this->load->view('main/template/view_1', $data);
        } else {
            redirect('main/home/loginerror/blog');
        }

		//$vars['categories'] = Doctrine::getTable('Category')->findAll();
		//$this->load->view('blog', $vars);
	}
	
    function main()
    {
        //$this->load->view('main/home');
        //echo 'hi';
        
        $data['title'] = "My blog Title";
        $data['heading'] = "My Blog Heading";
        $data['query'] = $this->db->get('entries');
        
        $this->load->view('blog_view', $data);
    }
	
    function comments()
    {
        $data['title'] = "My Comment Title";
        $data['heading'] = "My Comment Heading";
        $this->db->where('entry_id', $this->uri->segment(3));
        $data['query'] = $this->db->get('comments');
        
        $this->load->view('comment_view', $data); 
    }
    
    function comment_insert(){
        $this->db->insert('comments', $_POST);
        
        redirect('blog/comments/'.$_POST['entry_id']);
    }
    
    function tabs(){
        //echo 'hi';
        $this->load->view('tabs');
    }
}