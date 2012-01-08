<!DOCTYPE html>
<html>
<head>
  <title>Our site</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="http://localhost:35729/limm/js/livereload.js"></script>
</head>
  
<body>

  <div class="container grid">
  	<form>
  		<h2>HTML</h2>
  		<textarea id="html"></textarea>
  		
  		<h2>CSS</h2>
  		<textarea id="css"></textarea>
  	</form>
  </div>
  
  <div class="output grid">
  	<iframe> </iframe>
  </div>
  
  <script>
  (function() {
	$('.grid').height( $(window).height() );

	var frame = $('iframe'),
		contents = frame.contents(),
		body = contents.find('body'),
		styleTag = contents.find('head').append('<style></style>').children('style');

	$('textarea').focus(function(){
		var $this = $(this);
		$this.keyup(function(){
			if($this.attr('id') === 'html'){
				body.html($this.val());
			} else {

				styleTag.text($this.val());
			}
		});
	});
  })();
	
  </script>
</body>
</html>
