<?php
class Threads extends Controller {
    
    function Threads()
    {
        parent::Controller();
        $this->data['header1'] = 'main/template/header_1';
        $this->data['content'] = 'main/template/content_thread';
        $this->data['header_menu_select'] = 'Blog';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Blog | Forums | Threads";
        $this->uri_args = $this->uri->uri_to_assoc();
    
    }

    public function display($id, $offset = 0) {
        $this->load->model("blog");
        $per_page = 4;
        
        $vars =& $this->data;
        $vars['posts'] = $this->blog->get_post($id);
        $vars['thread_id'] = $id;
        $vars['thread_title'] = $this->blog->get_thread_title($id);
        
        $num_threads = count($vars['posts']);
        // do we have enough to paginate
        if ( $num_threads > $per_page) {
            // PAGINATION
            $this->load->library('pagination');
            $config['base_url'] = base_url()."index.php/main/thread/display/$id";
            $config['total_rows'] = $num_threads;
            $config['per_page'] = $per_page;
            $config['uri_segment'] = 5;
            $this->pagination->initialize($config);
    
            $vars['pagination'] = $this->pagination->create_links();
        }
        
        $this->load->view('main/template/view_1', $vars);
        return;
        
        $vars =& $this->data;
        $per_page = 4;
    
        $thread = Doctrine::getTable('Thread')->find($id);
        $vars['posts'] = $thread->getPostsArray($offset, $per_page);
        $vars['thread_id'] = $id;
        $vars['content_view'] = 'thread';
        $vars['container_css'] = 'thread';
    
        // do we have enough to paginate
        if (count($vars['posts']) > $per_page) {
            // PAGINATION
            $this->load->library('pagination');
            $config['base_url'] = base_url() . "main/threads/display/$id";
            $config['total_rows'] = $num_threads;
            $config['per_page'] = $per_page;
            $config['uri_segment'] = 5;
            $this->pagination->initialize($config);
    
            $vars['pagination'] = $this->pagination->create_links();
        }
    
        $this->load->view('main/template/view_1', $vars);
    
    }

}