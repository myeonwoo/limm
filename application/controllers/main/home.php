<?php

class Home extends Controller {

    function __construct()
    {
        parent::Controller();
    }
	
	function index()
	{
	    $is_logged_in = $this->session->userdata('is_logged_in');
	    if ($is_logged_in){
	        $username = $this->session->userdata('username');
	        $data['is_logged_in'] = true;
	    }
	    
	    if(!$is_logged_in){
	        $this->load->model('membership_model');
	        $query = $this->membership_model->validate();
	        $data = array();
	        if($query) // if the user's credentials validated...
	        {
	            $data['username'] = $this->input->post('username');
	            $data['is_logged_in'] = true;
	            $this->session->set_userdata($data);
	        } 
	    }
	    
		$this->load->view('main/home',$data);
	}
	
	function logout()
	{
	    $this->session->sess_destroy();
	    redirect('main/home', 'refresh');
	    //$this->index();
	}
	
	function test(){
	    
	    $dbconn = pg_connect("host=db.cecs.pdx.edu dbname=limm user=limm password=dexs5aXn") or die('Could not connect: ' . pg_last_error());
	    
	    // Performing SQL query
	    $query = 'SELECT * FROM persons';
	    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
	    
	    // Printing results in HTML
	    echo "<table>\n";
	    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	        echo "\t<tr>\n";
	        foreach ($line as $col_value) {
	            echo "\t\t<td>$col_value</td>\n";
	        }
	        echo "\t</tr>\n";
	    }
	    echo "</table>\n";
	    
	    // Free resultset
	    pg_free_result($result);
	    
	    // Closing connection
	    pg_close($dbconn);
	    
	}
}
