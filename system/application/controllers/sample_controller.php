<?php
class Sample_controller extends Controller {

  function index() {
    $data = array();
    $data['message'] = "index was called";
    $data['another_message'] = "blah blah";

    $this->load->view('my_view',$data);
  }

}
