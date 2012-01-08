<?php
class Images extends Controller {
  
    var $file;
    var $path;
    
    function Images() {
      
        parent::Controller();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->helper('directory');
        $this->load->helper('url');
        
        $this->path = "application" . DIRECTORY_SEPARATOR . "test_files" . DIRECTORY_SEPARATOR;
        //$this->path = "http://web.cecs.pdx.edu/~limm/invite/images";
        $this->file = $this->path . "hello.txt";
    
    }
    
    function index() {
        echo $this->path.'<br />';
        
        $url = BASEPATH.'../images/lim01';
        echo $url.'<br />';
        $files = directory_map($url);
        //$files = get_filenames($url, TRUE);
        
        foreach ($files as $value)
            echo $value.'<br />';
          
        echo 'end';
    
    }
    
    function limm01(){

        $mypath = BASEPATH.'../images/picture/lim01';
        $files = directory_map($mypath);
        //print_r($files);
        //$files = get_filenames($url, TRUE);
        $urls = array();
        foreach ($files as $value){
            if(strstr((string)$value,'.')){
                $imageurl = "images/picture/lim01/" . $value;
        
                $thumburl = "images/picture/lim01/thumb/" . $value;
                $row = array("url"=>$imageurl,"thumb"=>$thumburl);
        
                $urls[] = $row;
            }
    
            //echo $imageurl."=>".$thumburl.'<br />';
        }
    
        $data['urls'] = $urls;
    
        $this->load->view('images/lim01',$data);
    
    }

}