<?php
class Forums extends Controller {
    
    function Forums()
    {
        parent::Controller();
        $this->data['header1'] = 'main/template/header_1';
        $this->data['content'] = 'main/template/content_forum';
        $this->data['header_menu_select'] = 'Blog';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Blog | Forums";
        $this->uri_args = $this->uri->uri_to_assoc();
    
    }

    public function display($id, $offset = 0) {
        $vars =& $this->data;
        $per_page = 4;
    
        $forum = Doctrine::getTable('Forum')->find($id);
    
        $vars['title'] = $forum['title'];
        $vars['threads'] = $forum->getThreadsArray($offset, $per_page);
        $vars['content_view'] = 'forum';
        $vars['container_css'] = 'forum';
    
        $num_threads = $forum->numThreads();
    
        // do we have enough to paginate
        if ($num_threads > $per_page) {
            // PAGINATION
            $this->load->library('pagination');
            $config['base_url'] = base_url() . "main/forums/display/$id";
            $config['total_rows'] = $num_threads;
            $config['per_page'] = $per_page;
            $config['uri_segment'] = 5;
            $this->pagination->initialize($config);
    
            $vars['pagination'] = $this->pagination->create_links();
        }
    
        $this->load->view('main/template/view_1', $vars);
    
    }

}