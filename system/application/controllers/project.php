<?php
// system/application/controllers/hello.php

class Project extends Controller {
  
  function index(){
   $this->load->view('index_pro1');
  }
  
  // Interactive Map
  function imap(){
   $this->load->view('index_pro1'); 
  }
	
}