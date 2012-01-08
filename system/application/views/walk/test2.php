
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


<title>Vancouver Hotel Website Design Firm | Vancouver Luxury Hotel Web site Design & Development Company Wallop</title>


<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>

<script type="text/javascript">/* I love IE6, it's the bestest browser evar */
	(function($){ 
	    $.fn.extend({ 
	        myFunk: function() { 
	            // You must return jQuery object 
	            return $(); 
	        }, 
	        myPunk: function() {
	            return this.addClass('punked') 
	                      .bind('click', function(){ 
	                alert('You were punked!'); 
	            }); 
	        } 
	    }); 
	})(jQuery);

	$(function(){

		$("div#temp").click(function(evt) {
            alert('hi')
        });
        
		$("p").css("border","3px solid red");

		$('#new-nav').load('http://localhost/limm/walk/ptag', function() {
			  alert('Load was performed.');
			});

		$('#select').myFunk(); 
	});

	

	
</script>

  
</head>

<body>
<p>hello</p>
<b>Footer navigation:</b>
<div id="new-nav">new-nav</div>
<div id="temp">temp</div>

<div id="select">select</div>


</body>

</html>
  