<?php
// system/application/controllers/hello.php

class Walk extends Controller {
	

  function index(){
   $this->load->view('walk/my_door'); 
  }
  
  function test(){
  	$this->load->view('walk/test');
  }
  
  function nock(){
  	$this->load->view('walk/my_door2');
  }
  
  function test1(){
  	$this->load->view('walk/test1');
  }
  
  function test2(){
  	$this->load->view('walk/test2');
  }
  
  function ptag(){
  	$this->load->view('walk/simpPtag');
  }
}
