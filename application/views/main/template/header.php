<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome lim's home</title>
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
              $tabs = array('main/home'=>'Home','resume'=>'About Me','main/blog'=>'Blog','main/pictures'=>'Pictures');
              foreach ($tabs as $key=>$value){
                  if($whichpage == $key)
                      echo '<li class="active"><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
                  else
                      echo '<li><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
              }
          ?>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
</div>