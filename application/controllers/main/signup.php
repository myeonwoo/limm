<?php

class Signup extends Controller {

    public function __construct() {
        parent::Controller();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        
        $this->data['header1'] = 'main/template/header_1';
        $this->data['header_menu_select'] = '';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Signup";
        $this->data['content'] = 'main/template/content_signup_form';
        $this->uri_args = $this->uri->uri_to_assoc();
    }
    
    public function index() {
        $data =& $this->data;
	    $this->load->view('main/template/view_1',$data);
    }
    
    public function submit(){
        if ($this->_submit_validate() === FALSE){
            $this->index();
            return;
        }
        
        
        /*
         * TODO: insert the user to database
         * 
         * Use Doctrine library
         */
            $u = new User();
            $u->firstname = $this->input->post('firstname');
            $u->lastname = $this->input->post('lastname');
            $u->username = $this->input->post('username');
            $u->password = $this->input->post('password');
            $u->email = $this->input->post('email');
            $u->save();
        $data['message'] = 'Your acount was created!';
        $this->load->view('display_message',$data);
    }
    
    private function _submit_validate() {
    
        // validation rules
        $this->form_validation->set_rules('firstname','First Name','trim|required|alpha');
        $this->form_validation->set_rules('lastname','Last Name','trim|required|alpha');
        $this->form_validation->set_rules('username', 'Username',
    			'required|alpha_numeric|min_length[6]|max_length[12]');
    
        $this->form_validation->set_rules('password', 'Password',
    			'required|min_length[6]|max_length[12]');
    
        $this->form_validation->set_rules('passconf', 'Confirm Password',
    			'required|matches[password]');
    
        $this->form_validation->set_rules('email', 'E-mail',
    			'required|valid_email');
    
        return $this->form_validation->run();
    
    }
}
