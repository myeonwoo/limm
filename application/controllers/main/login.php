<?php

class Login extends Controller {
    
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
