<?php
// system/application/controllers/hello.php

class Hello extends Controller {

  function index(){
   $this->load->view('enterance'); 
  }
  
  function jswelcome(){
   $this->load->view('jswelcome'); 
  }
  
  function world() {
    echo "Hello CodeIgniter!";
  }

  function user_test() {

    $u = new User;
    $u->username = 'johndoe';
    $u->password = 'secret';
    $u->first_name = 'John';
    $u->last_name = 'Doe';
    $u->save();

    $u2 = new User;
    $u2->username = 'phprocks';
    $u2->password = 'mypass';
    $u2->first_name = 'Codeigniter';
    $u2->last_name = 'Doctrine';
    $u2->save();

    echo "added 2 users";
  }
  
  function onkeydown(){
    $this->load->view('08/onkeydown');
  }
  function handling_onload(){
    $this->load->view('08/handling_onload');
  }
  
  
  function jumpmenu(){
    $this->load->view('07/jumpmenu');
  }
  
  function bingo(){
    $this->load->view('bingo');
  }
  
  function california(){
    $this->load->view('07/california');
  }
  function florida(){
    $this->load->view('07/florida');
  }
  function hawaii(){
    $this->load->view('07/hawaii');
  }
  function alaska(){
    $this->load->view('07/alaska');
  }

}
