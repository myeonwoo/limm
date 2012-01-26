<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lim | Picture</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo base_url(); ?>css/main/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/psu/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/cuf_run.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main/radius.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>css/psu/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>css/psu/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/display/fancybox_picture.js"></script>

  
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/main/home">Home</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/main/resume">About me</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/main/blog">Blog</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>index.php/main/picture">Picture</a></li>
        </ul>
        <div class="user_controls">
            <?php $this->load->view('main/template/user_controls'); ?>
    	</div>
      </div>
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<script type="text/javascript">
var url = "<?php echo base_url(); ?>index.php/main/picture/display/";
var files = <?php echo json_encode($files); ?>;
</script>
  
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article"> 
          <h2> Myeonwoo <small>with portland family</small> </h2>
          <div class="clr"></div>
        </div>
<?php
    foreach ($urls as $url){
        echo "<a rel='example_group' href='".base_url().$url['url']."'><img alt='example1' src='".base_url().$url['thumb']."' /></a>";
    }
?>
      </div>
      <div class="sidebar">
        <div class="gadget">
        	
          <h2 class="star">Picture List</h2>
          <div class="clr"></div>
          <div class="folder">
          	<ul class="picture_links"></ul>
          </div>
          
          <br />
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">item 1</a></li>
            <li><a href="#">item 2</a></li>
            <li><a href="#">item 3</a></li>
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
  
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Modified by Myeonwoo Lim <a href="#">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
