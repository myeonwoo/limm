<?php
class Psufile extends Controller {
    
    var $file;
    var $path;
    
    function Psufile() {
    
        parent::Controller();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->helper('directory');
        $this->load->helper('url');
    
        //$this->path = "application" . DIRECTORY_SEPARATOR . "test_files" . DIRECTORY_SEPARATOR;
        $this->path = "localhost/limm/images/";
        $this->file = $this->path . "hello.txt";
    
    }
    
    function images(){
        echo base_url();
        
        echo '<br />';
        $data = array("name"=>"John Johnson",
                      "street"=>"Oslo West 16", 
                      "age"=>33,
                      "phone"=>"555 1234567");
        $arr = array(array(6 => 5, 13 => 9, "a" => 42),array(6 => 5, 13 => 9, "a" => 42),array(6 => 5, 13 => 9, "a" => 42));
        $arr1 = array(array(6 => 5, 13 => 9, "a" => 42));
        
        $arr2 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        
        echo json_encode($arr1);

    }
    
    function limm01(){
        //echo $this->path.'<br />';
        
        $mypath = BASEPATH.'../images/lim01';
        $files = directory_map($mypath);
        //$files = get_filenames($url, TRUE);
        
        $urls = array();
        foreach ($files as $value){
            $imageurl = "images/lim01/" . $value;
            
            $thumburl = "images/lim01/thumb/" . $value;
            
            $row = array("url"=>$imageurl,"thumb"=>$thumburl);
            
            $urls[] = $row;
            
            //echo $imageurl."=>".$thumburl.'<br />';
        }
        
        $data['urls'] = $urls;
        
        $this->load->view('picture/psu2',$data);
        
    }
}