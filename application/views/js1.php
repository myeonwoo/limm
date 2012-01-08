<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleForDashboard.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/src/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/src/js/accordion.js"></script>
<script type="text/javascript">
jQuery().ready(function(){  
  // applying the settings
  jQuery('#theMenu').Accordion({
    active: 'h3.selected',
    header: 'h3.head',
    alwaysOpen: false,
    animated: true,
    showSpeed: 400,
    hideSpeed: 800
  });
  jQuery('#xtraMenu').Accordion({
    active: 'h4.selected',
    header: 'h4.head',
    alwaysOpen: false,
    animated: true,
    showSpeed: 400,
    hideSpeed: 800
  });
}); 
</script>
      
<title>Lim Invites You!</title>  

</head>
<body>

<!-- wrap starts here --> 
<div id="wrap">
  
    <!-- header starts -->
  <div id="header">
    
      <span id="slogan">
          <font size="+3" face="Arial" color="#CCCCCC">Myeonwoo</font>
        </span>   
  </div>
  <!-- header end -->
    
    <!-- header-logo start -->
    <div id="header-logo">
    <font size="+3" face="Arial" color="#CCCCCC"></font>    </div>
  <!-- header-logo end -->

  <!-- Login template -->

    

  <!-- sidebar starts -->
   
<div id="sidebar" >
    
      <h1>About Me</h1>        
        <div class="left-box">
        <ul class="sidemenu">
          <li><a href="http://web.cecs.pdx.edu/~limm/invite/index.php/login/blank">Intro</a></li>
          <li><a href="http://web.cecs.pdx.edu/~limm/invite/index.php/login/blank">My attachements </a></li> 
        </ul> 
    </div>
        
        <h1>My achievements</h1>
        <div class="left-box">
        <ul class="sidemenu">
          <li><a href="http://web.cecs.pdx.edu/~ortsda">Ortsda</a></li>
          <li><a href="http://web.cecs.pdx.edu/~ltlc">Applied VRP</a></li> 
          <li><a href="http://web.cecs.pdx.edu/~limm/invite/index.php/login/blank">Practices</a></li>     

        </ul> 
    </div>
        
    <h1>Practice</h1>
        <ul id="theMenu">

      <li>
        <h3 class="head"><a href="javascript:;">Title 1</a></h3>
        <ul>
          <li><a href="index-multi.php">Content 1 1</a></li>
          <li><a href="index-multi.php">Content 1 2</a></li>
          <li><a href="index-multi.php">Content 1 3</a></li>
        </ul>

      </li>
      <li>
        <h3 class="head"><a href="javascript:;">Title 2</a></h3>
        <ul>
          <li>
              <ul id="xtraMenu">
                  <li>
                        <h4 class="head"><a href="javascript:;">Content xtra 2 1a</a></h4>

                        <ul>
                            <li><a href="index-multi.php">Content 2 1 1</a></li>
                            <li><a href="index-multi.php">Content 2 1 2</a></li>
                            <li><a href="index-multi.php">Content 2 1 3</a></li>
                        </ul>
                    </li>
                    <li>

                        <h4 class="head"><a href="javascript:;">Content xtra 2 1b</a></h4>
                        <ul>
                            <li><a href="index-multi.php">Content 2 2 1</a></li>
                            <li><a href="index-multi.php">Content 2 2 2</a></li>
                            <li><a href="index-multi.php">Content 2 2 3</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
          <li><a href="index-multi.php">Content 2 2</a></li>
          <li><a href="index-multi.php">Content 2 3</a></li>
        </ul>
      </li>
      <li>
        <h3 class="head"><a href="javascript:;">Title 3</a></h3>

        <ul>
          <li><a href="index-multi.php">Content 3 1</a></li>
          <li><a href="index-multi.php">Content 3 2</a></li>
          <li><a href="index-multi.php">Content 3 3</a></li>
        </ul>
      </li>
      <li>

        <h3 class="head"><a href="javascript:;">Title 4</a></h3>
        <ul>
          <li><a href="index-multi.php">Content 4 1</a></li>
          <li><a href="index-multi.php">Content 4 2</a></li>
          <li><a href="index-multi.php">Content 4 3</a></li>
        </ul>
      </li>

      <li>
        <h3 class="head"><a href="javascript:;">Title 5</a></h3>
        <ul>
          <li><a href="index-multi.php">Content 5 1</a></li>
          <li><a href="index-multi.php">Content 5 2</a></li>
          <li><a href="index-multi.php">Content 5 3</a></li>
        </ul>

      </li>
    </ul>
    </div>
        
  </div>

    <!-- sidebar end -->
    
    <!-- main start -->
    <div id="main">       
      
      
            <h1>My Background</h1>
            <p>I gotta fill this block.</p>
            
            <h1>Mission Statement</h1>
            <p>I gotta fill this block too. </p>
            
            
  </div>
  <!-- main end -->

<!-- wrap ends here -->
</div>

<div class="footer">
  <p><img src="<?php echo base_url(); ?>images/psu_logo.jpg" width="190" height="50"></p>
</div>
  
</body>
</html>