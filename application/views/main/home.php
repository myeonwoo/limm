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
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="<?php echo base_url(); ?>index.php/main/home">Home</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/main/aboutme">About me</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/main/blog">Blog</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/main/picture">Pictures</a></li>
        </ul>
      </div>
      
      <div class="clr"></div>
    </div>
    <?php
            if(isset($is_logged_in)){
                echo 'You are login.';
            } else {
                echo form_open('main/home');
                echo ' User Name  ';
                echo form_input('username', '');
                echo ' Password  ';
                echo form_password('password', '');
                echo form_submit('submit', 'Login');
                echo anchor('login/signup', 'Create Account');
                echo form_close();
            }
        ?>
	  <a href='http://web.cecs.pdx.edu/~limm/invite/index.php/main/home/logout'>Logout</a>
</div>

<div class="main">
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Template</span> License</h2>
          <div class="clr"></div>
          <p class="infopost">
          	<span class="date">On 11 sep 2018</span> Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under 
          	<a href="#">templates</a>, <a href="#">internet</a> &nbsp;|&nbsp; with 
          	<a href="#" class="com">Comments (<span>11</span>)</a>
          </p>
          <img src="<?php echo base_url(); ?>images/main/img1.jpg" width="201" height="146" alt="" class="fl" />
          <p>This is a free CSS website template by RocketWebsiteTemplates.com. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to RocketWebsiteTemplates.com.</p>
          <p>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla. Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
          <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
        </div>
        <div class="article">
          <h2><span>Future</span> technology</h2>
          <div class="clr"></div>
          <p class="infopost"><span class="date">On 29 aug 2010</span> Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> &nbsp;|&nbsp; with <a href="#" class="com">Comments (<span>7</span>)</a></p>
          <img src="<?php echo base_url(); ?>images/main/img2.jpg" width="201" height="141" alt="" class="fl" />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
          <p>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla. Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
          <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
        </div>
      </div>
      
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#">list 1</a><br /> blar blar</li>
            <li><a href="#">list 2</a><br /> blar blar</li>

          </ul>
        </div>
      </div>
      <div class="clr"></div>
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
