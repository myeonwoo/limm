<?php

class Blog extends Controller {

    function Blog()
    {
        parent::Controller();
        $this->load->scaffolding('entries');
        //$this->load->helper('url');
        //$this->load->helper('form');
    }
	
    function index()
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