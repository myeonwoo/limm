<?php
class Home extends Controller {

  public function index() {

    $vars['categories'] = Doctrine::getTable('Category')->findAll();

    //$this->load->view('template', $vars);
    $this->load->view('home',$vars);
  } 

}
