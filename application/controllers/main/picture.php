<?php

class Picture extends Controller {

    function __construct()
    {
        parent::Controller();
        //$this->load->helper('file');
        //$this->load->helper('download');
        $this->load->helper('directory');
        $this->load->helper('url');
        $this->data['styles'] = array('css/main/style.css','css/psu/fancybox/jquery.fancybox-1.3.4.css','css/custom-theme/jquery-ui-1.8.16.custom.css');
        $this->data['javascripts'] = array(
        'js/main/cufon-yui.js','js/main/arial.js','js/main/cuf_run.js','js/jquery-1.6.2.min.js','js/main/radius.js','js/custom-theme/jquery-ui-1.8.16.custom.min.js',
        'css/psu/jquery.mousewheel-3.0.4.pack.js','css/psu/jquery.fancybox-1.3.4.pack.js',
        'js/display/fancybox_picture.js','js/dialog/thread_post.js'
        );
        $this->data['content'] = 'main/template/content_picture';
        $this->data['this_url'] = base_url().'index.php/main/picture';
        
        
        $this->data['header_menu_select'] = 'Picture';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Picture";
        //$this->data['query'] = $this->db->get('entries');
        $this->uri_args = $this->uri->uri_to_assoc();
        
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
        
        //$this->load->view('main/picture',$data);
        $this->load->view('main/template/view_1', $data);
    }
}
