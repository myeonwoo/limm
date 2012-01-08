<?php
class Gallery extends Controller {
  
  function index1(){
    
    //echo realpath(APPPATH . '../images');
    //echo base_url().'images/';
    //die();
    
    $this->load->model('Gallery_model');
    if($this->input->post('upload')){
      $this->Gallery_model->do_upload();
    }
    
    $this->load->view('gallery');
  }
  
  function index() {
    
    $this->load->model('Gallery_model');
    
    if ($this->input->post('upload')) {
      $this->Gallery_model->do_upload();
    }
    
    $data['images'] = $this->Gallery_model->get_images();
    
    $this->load->view('gallery', $data);
     
  }
   
}