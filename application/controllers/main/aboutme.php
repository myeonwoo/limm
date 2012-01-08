<?php

class Aboutme extends Controller {

  function __construct()
  {
    parent::Controller();
  }
	
	function index()
	{
		$this->load->view('main/home');
		//echo 'hi';
	} 
}