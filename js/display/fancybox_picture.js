	$(function(){
		//$("a.a").fancybox();
		$("a[rel=example_group]").fancybox({
			"transitionIn"		: "none",
			"transitionOut"		: "none",
			"titlePosition" 	: "over",
			"titleFormat"		: function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
			}
		});
		
		
		  var list = $('<ul>').appendTo( $('#picture_links'));
		  list = $('.picture_links');
		  for(x in files){
			  if (typeof files[x] == "object") {
				  var next_url = url+x;
				  list.append('<li class="folder"><a href="'+next_url+'">'+x+'</a></li>');
			  }

		  }
		  
	});