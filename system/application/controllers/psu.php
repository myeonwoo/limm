<?php
class Psu extends Controller {

  function index() {
      $this->load->view('picture/psu');
  }
  
  function pic02(){
      $this->load->view('picture/psu2');
  }
  
  function json(){
      $this->load->view('picture/json');
  }
  
}