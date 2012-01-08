<?php
class Files extends Controller {
  
  var $file;
  var $path;
  
  function Files() {
    parent::Controller();
    $this->load->helper('file');
    $this->load->helper('download');
    $this->load->helper('directory');
    $this->load->helper('url');
    
    $this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
       . DIRECTORY_SEPARATOR;
    $this->file = $this->path . "hello.txt";
  }
  
  function index(){
    echo BASEPATH;
  }
  
  function write_test() { 
    $data = "Hello World";
    write_file($this->file,$data, 'a' );
    //write_file($this->file,$data);
    echo "finished writing";
  }
  
  function read_test() {
    $string = read_file($this->file);
    echo $string;
  }
  
  function filenames_test() {
    $files = get_filenames($this->path, TRUE);
    print_r($files);
  }

  function dir_file_info_test() {
    $files = get_dir_file_info($this->path);
    print_r($files);
  }

  function file_info_test() {
    $info = get_file_info($this->file, 'date');
    print_r($info);
  }
  
  function mime_test() {
    //echo get_mime_by_extension($this->file);
    echo get_mime_by_extension('hello.png');
  }
  
  function download_test() {
    $string = "Hello";
    force_download('hello.txt',read_file($this->file));
  }
  
  function display() {
    
    $data['files'] = directory_map(BASEPATH);
    //echo json_encode($data['files']);
    //return;
    $this->load->view('files', $data);
  }

}




