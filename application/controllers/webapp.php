<?php
class Webapp extends Controller {
    
    function __construct(){
        parent::Controller();
    }
    
    function iframe(){
        $this->load->view('webapp/iframe');
    }
}