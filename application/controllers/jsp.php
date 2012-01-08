<?php
class Jsp extends Controller {
  
  function index(){
    $this->js1();
  }
  
  function js1(){
    $this->load->view('js1');
  }
}
