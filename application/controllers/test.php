<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Test extends Controller {
  
    function Test()
    {
        parent::Controller(); 
    }
    
    function index()
    {
        echo BASEPATH;
        echo date("M-d-Y G", mktime(4, 0, 0, 12, 32, 1997));
        echo "<br />";
        echo date("M-d-Y G", mktime(1,0,0,7,4,2010));
        echo "<br />";
        echo mktime(1,0,0,7,4,2010);
    }
    
    function paginate() {
    
        $this->load->library('pagination');
    
        $config['base_url'] = base_url() . "test/paginate";
        $config['total_rows'] = '200';
        $config['per_page'] = '10';
    
        $this->pagination->initialize($config);
    
        echo $this->pagination->create_links();
    
    }
    
    function jqueryui(){
        $this->load->view('test');
    }
    
    function myjson(){
        $d = array('item1' => 'I love jquery4u', 'item2' => 'You love jQuery4u', 'item3' => 'We love jQuery4u');
        
        //return in JSON format
        echo json_encode($d);
    }
    
    function myjson2(){
        $this->uri_args = $this->uri->uri_to_assoc();
        $stationid = intval($this->uri_args['id']);
        $this->load->model("station");
        $arr = $this->station->getJson($stationid);
        echo json_encode($arr);
        return;
        
        /*
        data1 = array(Date.UTC(2011, 11,  5, 0), 162 ],
        	  Date.UTC(2011, 11,  5, 1), 106 ],
        	  Date.UTC(2011, 11,  5, 2), 87 ],
        	  Date.UTC(2011, 11,  5, 3), 98 ],
        	  Date.UTC(2011, 11,  5, 4), 67 ],
        	  Date.UTC(2011, 11,  5, 5), 89 ],
        	  Date.UTC(2011, 11,  5, 6), 90 ],
        	  Date.UTC(2011, 11,  5, 7), 98 ],
        	  Date.UTC(2011, 11,  5, 8), 99 ])
        [{
        	name: 'detector 1',
        	data: [
        	  [Date.UTC(2011, 11,  5, 0), 162 ],
        	  [Date.UTC(2011, 11,  5, 1), 106 ],
        	  [Date.UTC(2011, 11,  5, 2), 87 ],
        	  [Date.UTC(2011, 11,  5, 3), 98 ],
        	  [Date.UTC(2011, 11,  5, 4), 67 ],
        	  [Date.UTC(2011, 11,  5, 5), 89 ],
        	  [Date.UTC(2011, 11,  5, 6), 90 ],
        	  [Date.UTC(2011, 11,  5, 7), 98 ],
        	  [Date.UTC(2011, 11,  5, 8), 99 ]
        	]
          }]
        */
        //return in JSON format
    }
    
    function myjson3(){
        echo 'hi';
        date("Y-M-M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $a = array('Date.UTC(2011, 11,  5, 0)', 162);
        echo json_encode($a);
    
    }
    
    function form(){
        $this->load->library('Form_validation');
        
        $this->form_validation->test();
    }
    
    function form_submit(){
    
        $this->load->library('Form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|min_length[6]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        
        if(!$this->form_validation->run()){
          $this->load->view('test_form');
        } else {
          echo "success";
        }
        
    
    }
    
    function highchart(){
        $this->load->view('test/highchart');
    }

  
}
