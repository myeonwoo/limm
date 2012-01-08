<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends Controller
{
  function __construct()
  {
    parent::Controller();
  }
  
  function index() 
  { 
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    
    $this->email->from('myeonwoo.lim@gmail.com', 'Myeonwoo Lim');
    $this->email->to('myeonwoo.lim@gmail.com');   
    $this->email->subject('This is an email test');   
    $this->email->message('It is working. Great!');
    
    $path = $this->config->item('server_root');
    //echo $path; die();  //  /var/www/home
    $file = '/u/ortsda/public_html/plot/attachments/yourinfo.txt';
    
    $this->email->attach($file);
    
    if($this->email->send())
    {
      echo 'Your email was sent, fool.';
    }
    
    else
    {
      show_error($this->email->print_debugger());
    }
  }
  
  function sendNewsletter() 
  { 
    $this->load->library('form_validation');
    
    // field name, error message, validation rules
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('newsletter');
    }
    else
    {
      // validation has passed. Now send the email
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      
      $this->load->library('email');
      $this->email->set_newline("\r\n");

      $this->email->from('nettutsplustutorials@gmail.com', 'Jeffrey Way');
      $this->email->to($email);   
      $this->email->subject('Test Newsletter Signup Confirmation');   
      $this->email->message('You\'ve now signed up, fool!');

      $path = $this->config->item('server_root');
      $file = $path . '/ci_day4/attachments/newsletter1.txt';
      $file = '/u/ortsda/public_html/plot/attachments/yourinfo.txt';

      $this->email->attach($file);

      if($this->email->send())
      {
        //echo 'Your email was sent, fool.';
        $this->load->view('signup_confirmation_view');
      }

      else
      {
        show_error($this->email->print_debugger());
      }
    }
  }
  
  function sendTest(){
  
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'myeonwoo.lim@gmail.com',
      'smtp_pass' => 'coolio76'
    );
    
    $this->load->library('email', $config);
    
    $this->email->set_newline("\r\n");
    
    $this->email->from('myeonwoo.lim@gmail.com', 'Myeonwoo Lim ^^');
    $this->email->to('limm@cecs.pdx.edu');    
    $this->email->subject('This is an email test');   
    $this->email->message('It is working. Great!');
    
    $path = $this->config->item('server_root');
    //echo $path; die();  //  /var/www/home
    $file = '/u/ortsda/public_html/plot/attachments/yourinfo.txt';
    
    $this->email->attach($file);
    
    if($this->email->send())
    {
      echo 'Your email was sent, fool.';
    }
    
    else
    {
      show_error($this->email->print_debugger());
    }
    
  }
  
  function sendTest2(){
  
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://mailhost.cecs.pdx.edu',
      'smtp_port' => 993,
      'smtp_user' => 'limm@cecs.pdx.edu',
      'smtp_pass' => 'dexs5aXn'
    );
    
    $this->load->library('email', $config);
    
    $this->email->set_newline("\r\n");
    
    $this->email->from('limm@cecs.pdx.edu', 'Myeonwoo Lim ^^');
    $this->email->to('limm@cecs.pdx.edu');    
    $this->email->subject('This is an email test');   
    $this->email->message('It is working. Great!');
    
    $path = $this->config->item('server_root');
    //echo $path; die();  //  /var/www/home
    $file = '/u/ortsda/public_html/plot/attachments/yourinfo.txt';
    
    $this->email->attach($file);
    
    if($this->email->send())
    {
      echo 'Your email was sent, fool.';
    }
    
    else
    {
      show_error($this->email->print_debugger());
    }
    
  }
  
  
  
  
  
  
  
  
  
  
  
}
