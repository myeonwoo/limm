<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo base_url(); ?>css/main/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/cuf_run.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/radius.js"></script>

</head>
<body>

<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <?php 
              $tabs = array('main/home'=>'Home','main/resume'=>'About Me','main/blog'=>'Blog','main/picture'=>'Picture');
              foreach ($tabs as $key=>$value){
                  if($whichpage == $value)
                      echo '<li class="active"><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
                  else
                      echo '<li><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
              }
          ?>
        </ul>
        <div class="user_controls">
        <?php
            if ($user = Current_User::user()){
                echo 'Hello, <em>'.$user->username.'</em>'.anchor('main/home/logout', 'Logout');
            }
        
        ?>

    	</div>
      </div>
      
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
</div>