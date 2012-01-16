<?php
class Resume extends Controller {

    function __construct(){
        parent::Controller();
        $this->data['header1'] = 'main/template/header_1';
        $this->data['header_menu_select'] = 'About Me';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Resume";
        $this->data['content'] = 'main/template/content_myresume';
        $this->uri_args = $this->uri->uri_to_assoc();
        
        //$this->data['content'] = 'main/resume_view';
    }

    function index(){
        $data =& $this->data;
        $this->load->view('main/template/view_1',$data);
    }
    
    function myresume(){
        $this->load->view('main/resume');
    }
}