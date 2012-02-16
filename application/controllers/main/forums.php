<?php
class Forums extends Controller {
    
    function Forums()
    {
        parent::Controller();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        
        $this->data['headers'] = array('main/template/header_1','main/template/header_2');
        $this->data['styles'] = array('css/main/style_thread.css');
        $this->data['javascripts'] = array('js/dialog/thread_post.js');
        $this->data['content'] = 'main/template/content_forum';
        $this->data['header_menu_select'] = 'Blog';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Blog | Forums";
        $this->uri_args = $this->uri->uri_to_assoc();
        $this->uri_args['controller'] = 'main/forums/';
    
    }

    public function display($id, $offset = 0) {
        if($user = Current_User::user()){
            $vars =& $this->data;
            $per_page = 5;
        
            $forum = Doctrine::getTable('Forum')->find($id);
        
            $vars['forum_title'] = $forum['title'];
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
        } else {
            redirect('main/home/loginerror/blog');
        }
        
            
    
    }
    
    public function thread_insert(){

        if($user = Current_User::user()){
            if($this->_submit_validate()=== FALSE){
                $this->display($_POST['forum_id']);
                return;
            }
        } else {
            redirect('main/home/loginerror/blog');
        }
        $thread = new Thread();
        $thread->title = $_POST['thread_title'];
        $thread->forum_id = $_POST['forum_id'];
        $thread->save();
        
        $post = new Post();
        $post->content = $_POST['post_comment'];
        $post->thread_id = $thread->id;
        $post->user_id = $user->id;
        $post->save();
        
        $this->display($_POST['forum_id']);
        return;
        
    }
    
    private function _submit_validate() {
    
        // validation rules
        $this->form_validation->set_rules('thread_title','Thread Title','trim|required');
        $this->form_validation->set_rules('post_comment','Post','trim|required');
        return $this->form_validation->run();
    
    }

}



