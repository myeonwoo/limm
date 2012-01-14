<?php

class Picture extends Controller {

    function __construct()
    {
        parent::Controller();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->helper('directory');
        $this->load->helper('url');
        
    }
	
    function index()
    {
        $this->display('MeAndPeople');
        
    }
    
    function display($folder){
        $data =& $this->data;
        
        $mypath = BASEPATH.'../images/picture/'.$folder;
        
        $files = directory_map($mypath);
        if ( $files == null){
            $this->index();
            return;
        } 
        $urls = array();
        foreach ($files as $value){
            if(strstr((string)$value,'.')){
                $imageurl = "images/picture/".$folder."/" . $value;
        
                $thumburl = "images/picture/".$folder."/thumb/" . $value;
                $row = array("url"=>$imageurl,"thumb"=>$thumburl);
                $urls[] = $row;
            }
        }
        $data['urls'] = $urls;
        
        $mypath = getcwd().'/images/picture';
        //$mypath = BASEPATH.'../images/picture';
        $data['files'] = directory_map($mypath);
        
        $this->load->view('main/picture',$data);
        
    }
}
