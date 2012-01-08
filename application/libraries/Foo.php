<?php
class Foo {
  var $CI;
  
  function Foo(){
    $this->CI =& get_instance();
  }
  
  function test($value){
    echo "You passed me $value. <br />"; 
    
    /* not $this->load->library('Config); */
    $this->CI->load->library('Config');
    
    echo "Your language is: ". $this->CI->config->item('language');
  }
  
}
