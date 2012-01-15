<?php
class Resume extends Controller {

    function __construct(){
        parent::Controller();
        $this->data['content'] = 'main/resume_view';
        $this->data['whichpage'] = "About Me";
        $this->data['title'] = "WOODBIRD | Resume";
        $this->uri_args = $this->uri->uri_to_assoc();
    }

    function index(){
        $data =& $this->data;
        //$this->load->view('main/template/include',$data);
        $this->load->view('main/resume_view', $data);
    }
    
    function myresume(){
        $this->load->view('main/resume');
    }
}