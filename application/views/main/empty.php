<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Lim | Picture</title>
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
            } else {
                echo form_open('main/home/submit');
                echo form_input('username', 'put username');
                echo form_password('password', 'password');
                echo form_submit('submit', 'Login');
                echo anchor('register/login/signup', 'Register');
                //echo anchor('main/home','Login').' | '.anchor('register/login/signup', 'Register');
                echo form_close();
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

<div class="main">
 
  <div class="content">
    <div class="content_resize">

      
      
    </div>
  </div>

</div>


<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pix1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Descript 2</span></h2>
        <p>.............<br /> </p>
      </div>
      <div class="col c3">
        <h2><span>Descript 3</span></h2>
        <p>.............<br /> </p>
      </div>
      <div class="clr"></div>
    </div>
</div>
<div class="footer">
<div class="footer_resize">
  <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
  <p class="rf">Layout by Rocket <a href="#">Website Templates</a></p>
  <div class="clr"></div>
</div>
</div>
</body>
</html>
