<?php

class Home extends Controller {

    function __construct()
    {
        parent::Controller();
        
        $this->data['headers'] = array('main/template/header_1','main/template/header_2');
        $this->data['javascripts'] = array('js/dialog/thread_post.js');
        $this->data['header_menu_select'] = 'Home';
        $this->data['header_menu_list'] = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
        $this->data['title'] = "WOODBIRD | Home";
        $this->data['content'] = 'main/template/content_home';
        $this->data['this_url'] = base_url().'index.php/main/home';
        $this->uri_args = $this->uri->uri_to_assoc();
        $this->uri_args['controller'] = 'main/home/';
        
        $this->load->library('form_validation');
    }
    
    function index(){
        $data =& $this->data;
        $this->load->view('main/template/view_1',$data);
    }
    
    function loginerror($message){
        $login_error = array('resume'=>'Login first to know about me!',
        'blog'=>'Login first to look my blog','login'=>'Incorrect username or password!',
        'register'=>'Your account have been registered.');
        $data =& $this->data;
        $data['user_message'] = $login_error[$message];
        $this->load->view('main/template/view_1',$data);
    }
    
    function test(){
        
        $this->load->view('main/template/view_1',$data);
    }
    
	function index2()
	{
	    $data =& $this->data;
	    
	    $is_logged_in = $this->session->userdata('is_logged_in');
	    if ($is_logged_in){
	        $username = $this->session->userdata('username');
	        $data['is_logged_in'] = true;
	    }
	    
	    if(!$is_logged_in){
	        $this->load->model('membership_model');
	        $query = $this->membership_model->validate();
	        if($query) // if the user's credentials validated...
	        {
	            $data['username'] = $this->input->post('username');
	            $data['is_logged_in'] = true;
	            $this->session->set_userdata($data);
	        } 
	    }
	    
		$this->load->view('main/template/include',$data);
	}
	
	public function submit() {
	
	    if ($this->_submit_validate() === FALSE) {
	        /* direct to a page with authentication */
	        redirect('main/home/loginerror/login');
	        //$this->index();
	        return;
	    }
	    /* direct to a page with UN-authentication */
	    $this->index();
	    //redirect('/'); // goto default page
	
	}
	
	private function _submit_validate() {
	
	    $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_authenticate');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    $this->form_validation->set_message('authenticate','Invalid login. Please try again.');
	
	    return $this->form_validation->run();
	
	}
	public function authenticate() {
	    return Current_User::login($this->input->post('username'),$this->input->post('password'));
	}
	
	public function authenticate2() {
	
	    // get User object by username
	    if ($u = Doctrine::getTable('User')->findOneByUsername($this->input->post('username'))) {
	
	        // this mutates (encrypts) the input password
	        $u_input = new User();
	        $u_input->password = $this->input->post('password');
	
	        // password match (comparing encrypted passwords)
	        if ($u->password == $u_input->password) {
	            unset($u_input);
	            return TRUE;
	        }
	        unset($u_input);
	    }
	
	    return FALSE;
	}
	
	
	function logout()
	{
	    $this->session->sess_destroy();
	    redirect('main/home', 'refresh');
	    //$this->index();
	}

}
