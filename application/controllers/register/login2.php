<?php

class Login extends Controller {

  function index()
  {
    $Data['MessagePassed'] = false;
    $this->load->view('login', $Data);
  }
  
  function test(){
      echo 'hi';
  }
  
  function validate_credentials()
  {   
    $this->load->model('membership_model');
    $query = $this->membership_model->validate();
    
    if($query) // if the user's credentials validated...
    {
      $data = array(
        'username' => $this->input->post('username'),
        'is_logged_in' => true
      );
      $this->session->set_userdata($data);
      redirect('dashboard');
    }
    else // incorrect username or password
    {
      $Data['MessagePassed'] = true;
      $Data['Message'] = 'Login was failed.';
      $this->load->view('login_main_form', $Data);
    }
  }
  
  function signup()
  {
    $this->load->view('register/signup_form');
  }
  
  function create_member()
  {
    $this->load->library('form_validation');
    
    // field name, error message, validation rules
    $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
    
    
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('signup_form');
    }
    
    else
    {     
      $this->load->model('membership_model');
      
      if($query = $this->membership_model->create_member())
      {
        $data['main_content'] = 'signup_successful';
        $this->load->view('includes/template', $data);
      }
      else
      {
        $this->load->view('signup_form');     
      }
    }
  }
  
  function logout()
  {
    $this->session->sess_destroy();
    $this->index();
  }
  
  function faculty(){
    $this->load->view('faculty');
  }
  function research(){
    $this->load->view('research');
  }
  function blank(){
    $this->load->view('blank_page');
  }

}