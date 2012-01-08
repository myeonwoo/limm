
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="Ix1hbRe4ms4e3e1mcc-e_q0tI14emvUWLaQZooguHzc" />
<META NAME="description" CONTENT="Wallop is a digital creative studio that focuses on the hospitality sector. We design engaging websites, produce high end videos, and develop integrated online marketing strategies for four and five star hotels.">
<META NAME="keywords" content="hotel web website vancouver design marketing social media video seo sem web site online">
<META NAME="robot" content="index,follow">

<title>Vancouver Hotel Website Design Firm | Vancouver Luxury Hotel Web site Design & Development Company Wallop</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/reset.css" />

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/984.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/screen.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo base_url(); ?>css/print.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.fancybox-1.3.0.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/sifr.css" />

<!--[if gte IE 6]><link rel="stylesheet" type="text/css" media="screen" href="/assets/css/screen_IE.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="/assets/css/screen_IE6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="/assets/css/screen_IE7.css" /><![endif]-->

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.localscroll-1.2.6-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cycle.all.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ga.packed.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/sifr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/sifr-config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ie6blocker.js"></script>
<script type="text/javascript">$.gaTracker('UA-370200-3');</script>

<script type="text/javascript">/* I love IE6, it's the bestest browser evar */
$(function(){
	var ie6 = ($.browser.msie && parseInt($.browser.version) == 6);
  
	$('#contact_box').height(297).hide();
	$('#contact_btn').click(function(){
		$.pageTracker._trackPageview(window.location.pathname + '#contact');
		$('#contact_box').slideToggle('slow');
		return false;
  	});
  
	$('#subscribe_box').height(120).hide();
	$('#subscribe_btn').click(function(){
		$('#subscribe_box').slideToggle('slow');
		return false;
  	});
  
	try {
		if(navScroll)
		{
			$('#nav').addClass('scroll');
		}
	} catch(e){}
  
	var nav = $('#nav.scroll');
	var nav_start = 185;
	var nav_end = 130;
  
	nav.find('a.hashtrack').click(function(){
		var hash = this.href.substring(this.href.indexOf('#'),this.href.length);
		$.pageTracker._trackPageview(window.location.pathname + hash);
	});
  
	if(ie6) {
		var iecontainer = $('<div/>').addClass('iecontainer');
		$(window).resize(ieNavPosition);
		function ieNavPosition(){
			nav.css({left: $('.container_12').offset().left + $('.container_12').width() - 228 });
		}
		ieNavPosition();
		$('body').append( iecontainer.append($('.container_12')) ).append( $('<div/>').addClass('darkbg').append(nav) );
	} else {
		nav.css({top:nav_start});
		$(window).scroll(navPosition);
		navPosition();
	}
  
	function navPosition(){
		var scrollval = $(window).scrollTop();
    
		if(scrollval < nav_end) {
			if(ie6) {
				nav.css({top:nav_start});
			} else {
				nav.css({top:nav_start-scrollval});
			}
		} else {
			if(ie6) {
				nav.css({top:scrollval + (nav_start-nav_end)});
			} else {
				nav.css({top:nav_start-nav_end});
			}
		}
	}
  
	$.localScroll({offset:-70, target:(ie6?$('.iecontainer'):window)});
  
	$('#ourwork_nav').hide();
  
	var cfc = $('#contact_form_container');
	cfc.load('/contact/?r='+Math.random(), function(){
		$('#contact_submit').live('click', function(){
			$.pageTracker._trackPageview(window.location.pathname + '#contact_send');
			var data = $('#contact_form_container form:first').serialize();
			cfc.find('input, textarea').attr('disabled','disabled');
			cfc.parent().css('background','url(/assets/graphics/ajax-loader.gif) no-repeat 350px center');
			cfc.fadeTo('fast', 0.01, function(){
				$.post('/contact/', data, function(data, status){
					cfc.parent().css('background','none');
					cfc.html(data).fadeTo('fast',1);
				});
			});
      	return false;
		});
	});
});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-1.3.0.js"></script>

<script type="text/javascript">
$(function(){
  $(".video").fancybox({
    overlayOpacity: 0.3,
    overlayColor: '#000'  
  });
  
  $("a#jobs_btn").fancybox({
    'titlePosition' : 'inside',
    'transitionIn'  : 'none',
    'transitionOut' : 'none'
  });

});
function videoResized(width, height)
{
  $('#fancybox-inner object:first, #fancybox-inner embed:first').attr({
    width: width,
    height: height
  });
  $('#fancybox-wrap').width(width + 20).height(height + 20);
  $('#fancybox-inner').width(width).height(height);
  $.fancybox.center();
}
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".twitterContent").tweet({
            username: "wallop",
            join_text: "auto",
            count: 1,
            auto_join_text_default: "<br />",
            loading_text: "loading tweets..."
        });
  });
  
  $(document).ready(function() {
    $('ul#sliderImages').cycle({
      fx: 'fade',
      speed: '800',
      timeout: 0,
      next: '#nextSlide', 
        prev: '#prevSlide'
    });
  });
</script>

<script type="text/javascript">
    $(function () {
        $('.bubbleInfo').each(function () {
            var distance = 10;
            var time = 250;
            var hideDelay = 200;

            var hideDelayTimer = null;

            var beingShown = false;
            var shown = false;
            var trigger = $('.trigger', this);
            var info = $('.popup', this).css('opacity', 0);


            $([trigger.get(0), info.get(0)]).mouseover(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                if (beingShown || shown) {
                    // don't trigger the animation again
                    return;
                } else {
                    // reset position of info box
                    beingShown = true;

                    info.css({
                        top: -35,
                        left: -75,
                        display: 'block'
                    }).animate({
                        top: '-=' + distance + 'px',
                        opacity: 1
                    }, time, 'swing', function() {
                        beingShown = false;
                        shown = true;
                    });
                }

                return false;
            }).mouseout(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                hideDelayTimer = setTimeout(function () {
                    hideDelayTimer = null;
                    info.animate({
                        top: '-=' + distance + 'px',
                        opacity: 0
                    }, time, 'swing', function () {
                        shown = false;
                        info.css('display', 'none');
                    });

                }, hideDelay);

                return false;
            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
  $('.paper2 a > img').parent().addClass('article_simplelink');
  
  $('#newsletter').submit(function(){
    
    var values = $('#newsletter').serialize();
    
    $('#newsletter .form-indicator').fadeIn('normal', function(){
    
      $.post('/newsletter/',values, function(data){
        
        if(data.error)
        {
          $('#newsletter .form-indicator').stop().fadeOut('normal');
          $('#newsletter input').removeAttr('disabled','disabled');
          $('#newsletter ul.errorlist').remove();
          $(data.errors).each(function(){
            $('#newsletter input[name="'+this.name+'"]').before(
              $('<ul/>').addClass('errorlist').append(
                $('<li/>').text(this.value)
              )
            );
          });
        }
        else
        {
          $('#newsletter').fadeOut('normal', function(){
            $('#newsletter').empty().append(
              $('<div/>').addClass('grid_9').text('Thank you for signing up!')
            ).fadeIn('normal');
          });
        }
      },'json');
    
    });
    
    $('#newsletter input').attr('disabled','disabled');
    
    return false;
  });
  $('#article_signup').show();
});
</script>

<style type="text/css">
/*#article_signup, .form-indicator {
  display: none;
}*/
</style>



</head>

<body class="lightbg">

<!-- main wrap START -->
<div id="main_wrap">
	<div id="headerWrap">
	 	<div id="header01">     
			<div class="grid_12 no_margin_horiz innerHeadRule"> 
				<p><a href="/" id="logo_wallop" title="Web Design"><span>Wallop</span></a></p>
	            <a href="#" id="contact_btn"><span>contact us</span></a>
	            <a id="jobs_btn" href="/assets/jobs/jobs.txt"><span>jobs</span></a>
	            <a id="subscribe_btn" href="#"><span>subscribe</span></a>
	        </div>
			<div class="clearboth"></div> 
	    <!-- header01 ends -->
	 	</div>
	</div>
	     
    <div class="container_12 padTop40">
		<a name="top" class="anchor01" title="Web Design"></a>
        <div class="grid_3 prefix_9">
	        <ul id="nav">
				<li class="nav_nobullet"><a href="/">home</a></li>
	            <li><a href="/portfolio/">portfolio</a></li>
	            <li><a href="/services/">services</a></li>
	            <!--<li><a href="/about/">about</a></li> -->
	            <li><a href="/articles/">articles</a></li>
	            <li><a href="/hospitality/">hospitality</a></li>
	        <!-- nav list ends -->
	        </ul>
        <!-- div around nav ends -->
        </div>
        
        
        
        <div id="contact_box">
			<h2 class="section_heading skinny tContact"><span>Looking for a quote? Shoot us an email.</span></h2>
            <div class="spacer20"></div>
            
            <div id="contact_form_container">
                <div class="grid_9">
                    <p>wallop</p>
                </div>
                <div class="clear"></div>
                
                <div class="grid_3">
                    <p><a href="mailto:info@wallopcreative.com">info@wallopcreative.com</a></p>
                </div>
                <div class="grid_3">
                    <p>p 604.408.6326<br />
                        f 604.408.6340</p>
                </div>
                <div class="grid_3">
                    <p>303 - 100 West Pender St.<br />
                    Vancouver BC &nbsp;V6B1R8</p>
                </div>
            </div>
            
            <div class="clearboth"></div>
        
        <!-- contact div ends -->
        </div>
        
		<div id="subscribe_box">
			<div id="article_signup">  
				<h2 class="section_heading skinny tSubscribe"><span>subscribe to our newsletter</span></h2>
	            
	            <form id="subForm" class="form_style01" method="post" action="http://wallopcreative.createsend.com/t/y/s/tukym/">
		            <div class="grid_12">
		                <p>Sign up for article updates, Wallop news and more.</p>
		
		            </div>
		            <div class="clear"></div>
		        
		            <div class="grid_3">
		                <p><label for="name"><strong>name</strong></label><input type="text" name="cm-name" id="name" /></p>
		            </div>
		            
		            <div class="grid_3">
		                <p><label for="tukym-tukym"><strong>email</strong></label><input type="text" name="cm-tukym-tukym" id="tukym-tukym" /></p>
		            </div>
		
		            
		            <div class="grid_3">
		                <p><input class="send_btn" checked="checked" type="image" value="Subscribe" onclick="$(this.form).submit();return false;" alt="submit button" onmouseout="this.src='/assets/graphics/forms/send_btn01.png'" onmousedown="this.src='/assets/graphics/forms/send_btn_down01.png'" onmouseover="this.src='/assets/graphics/forms/send_btn_over01.png'" src="/assets/graphics/forms/send_btn01.png"/> <img class="form-indicator" src="/assets/graphics/ajax-loader.gif" alt="Loading" width="39" height="39" />
		                </p>
		            </div>
	            </form>
	            
	            <div class="clear"></div>
	    
			</div>
        </div>   
        
      
        <div class="grid_9">
			<h1 class="homeBlurb blurbOne"><span>wallop is a digital creative studio. we create compelling websites, video and strategy for the web.</span></h1>
			<a class="homeBlurb blurbTwo" href="/hospitality/"><span>we've helped a lot of folks in the hospitality industry.</span></a>
        </div>
        <div class="clearboth"></div>
       
		<div class="spacer40"></div>

        <div id="sliderWrapper">
			<h5 class="tFeaturedProjects"><span>featured project &nbsp;|&nbsp;</span></h5>

            <ul id="sliderNav">
                <li><a id="nextSlide" href="#"><span>Previous</span></a></li>
                <li><a id="prevSlide" href="#"><span>Next</span></a></li>
            </ul>
    
            <ul id="sliderImages">
                <li><a class="slideTitle" href="http://interactive.nfb.ca/#/thisland" target="_blank">nfb: this land</a><a href="http://interactive.nfb.ca/#/thisland" target="_blank"><img src="<?php echo base_url(); ?>graphics/featured_nfb.jpg" width="912" height="493" alt="NFB: This Land"/></a></li>
                <li><a class="slideTitle" href="http://libertyhotel.com/" target="_blank">the liberty hotel</a><a href="http://libertyhotel.com/" target="_blank"><img src="<?php echo base_url(); ?>graphics/featured_liberty.jpg" width="912" height="493" alt="Liberty Hotel"/></a></li>
                <li><a class="slideTitle" href="http://www.laurelpoint.com/" target="_blank">the inn at laurel point</a><a href="http://www.laurelpoint.com/" target="_blank"><img src="<?php echo base_url(); ?>graphics/featured_lpi.jpg" width="912" height="493" /></a></li>
                <li><a class="slideTitle" href="http://wickinn.com/" target="_blank">the wickaninnish inn</a><a href="http://wickinn.com/" target="_blank"><img src="<?php echo base_url(); ?>graphics/featured_wick.jpg" width="912" height="493" /></a></li>
                <li><a class="slideTitle" href="http://www.kasian.com/microsites/bcit/" target="_blank">the BCIT aerospace campus</a><a href="http://www.kasian.com/microsites/bcit/" target="_blank"><img src="<?php echo base_url(); ?>graphics/featured_bcit_aerospace.jpg" width="912" height="493" /></a></li>
            </ul>
		</div>

        
        <div class="clearboth"></div>
      
        
        
        <div class="spacer30"></div>

        
    <!-- container_12 ENDS -->        
    </div>
<!-- main wrap ENDS -->
</div>
  




<!-- SECONDARY WRAP, wallpaperbg for light version / darkbg for dark version, START -->
<div id="secondary_wrap">

	<div class="container_12">
         
        <div class="spacer30"></div>
    
        <div id="footer">
    
          <div class="clearboth"></div> <!-- for ie6 -->

            
          <div class="grid_3 noprint">
                <ul>
                    <li>Wallop</li>
                  <li>303 - 100 West Pender St.</li>
                    <li>Vancouver, BC &nbsp;V6B1R8</li>
                    <!--<li>Canada</li> -->
                </ul>

            </div>
                
            <div class="grid_3 noprint bubbleInfo">
                <ul>
                    <li><a href="mailto:info@wallopcreative.com">info@wallopcreative.com</a></li>
                    <li>P 604.408.6326</li>
                    <li>F 604.408.6340</li>
                    <li><a class="twitterIconFooter trigger" href=""><span>Twitter</span></a> <a class="facebookIconFooter" href="http://www.facebook.com/wallopcreative" target="_blank"><span>Facebook</span></a></li>

                </ul>
                <div class="popup">
                  <div class="popupContent">
                  <p>Follow one (or both) of our Twitter feeds</p>
                  <a href="http://twitter.com/wallop" target="_blank">Wallop Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://twitter.com/wallopHotels" target="_blank">Wallop Hospitality Twitter</a>
                    </div>
                </div>

            </div>
            
            <div class="grid_6 no_margin_right twitterFeed">
              <div class="twitterContent"></div>
                <a class="twitterBirds" href="http://twitter.com/wallop" target="_blank"><span>We're on the twitter</span></a>
            </div>
                
            <div class="clearboth"></div>
                
        </div>
        <!-- footer div ENDS -->

            
        
        <!-- hCard code for SEO -->
        
        <div id="hcard-Wallop-Creative" class="vcard">
          <a class="url fn" href="http://www.wallopcreative.com/hospitality/">Wallop Creative</a>
          <div class="org">Wallop</div>
          <a class="email" href="mailto:info@wallopcreative.com">info@wallopcreative.com</a>
          <div class="adr">
            <div class="street-address">303 - 100 West Pender St.</div>

            <span class="locality">Vancouver</span> 
            <span class="region">BC</span>, 
            <span class="postal-code">V6B 1R8</span>
            <!--<span class="country-name">Canada</span> -->
            </div>
          <div class="tel">604 408 6326</div>
        </div>  
    
    </div>

    <!-- container_12, ENDS -->

<!-- SECONDARY WRAPPER, wallpaperbg for light version / darkbg for dark version, ENDS -->
</div>





<script type="text/javascript" src="<?php echo base_url(); ?>js/7949.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/re_.js"></script>
<script type="text/javascript">
try {
reinvigorate.track("v17h8-76hya9r92w");
} catch(err) {}
</script>
</body>

</html>
  