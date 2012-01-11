<?php
class Resume extends Controller {

    function __construct(){
        parent::Controller();
    }

    function index(){
        $this->load->view('resume');
    }
}