<?php
class Login extends Controller {

	public function __construct() {
		parent::Controller();

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('register/login_form');
	}

	public function submit() {

		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;
		}
		redirect('/');
	}
	
	function signup()
	{
	    $this->load->view('register/signup_form');
	}

	private function _submit_validate() {

		$this->form_validation->set_rules('username', 'Username','trim|required|callback_authenticate');

		$this->form_validation->set_rules('password', 'Password','trim|required');

		$this->form_validation->set_message('authenticate','Invalid login. Please try again.');

		return $this->form_validation->run();

	}

	public function authenticate() {

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
}
