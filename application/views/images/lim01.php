<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<title>FancyBox 1.3.4 | Demonstration</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/psu/jquery-1.4.3.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="<?php echo base_url(); ?>/js/psu/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>css/psu/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>css/psu/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/psu/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>css/psu/style.css" />
	<script type="text/javascript">
		$(document).ready(function() {

			$("a.a").fancybox();

		});
	</script>
</head>
<body>
<div id="content">
	<h1>Myeonwoo <span>with portland family</span></h1>
	
	<p>Hi everyone. Do you all remember that you were so rustic in the apperance?</p>

<?php 
    foreach ($urls as $url){
        
        //echo $url['url'].'<br />';
        
        echo "<a class='a' href='".base_url().$url['url']."'><img alt='example1' src='".base_url().$url['thumb']."' /></a><br/>";
    }

?>
	

	<hr />

	
</div>
</body>
</html>