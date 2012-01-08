var IE6 = (navigator.userAgent.indexOf("MSIE 6")>=0) ? true : false;
if(IE6){

  $(function(){
    
    $("<div>")
      .css({
        'position': 'absolute',
        'top': '0px',
        'left': '0px',
        backgroundColor: 'black',
        'opacity': '1',
        'width': '100%',
        'height': $(window).height(),
        zIndex: 5000
      })
      .appendTo("body");
      
    $("<div><img src='http://geoff.wallop.local:8000/assets/js/no-ie6.png' alt='' style='float: left;'/><p><br /><strong>Wallop has dropped support for Internet Explorer 6.</strong><br /><br />It's an arcahic browser no longer capable of providing a rich internet browsing experience. Perhaps try Safari, Firefox, Chrome, IE7 or IE8.</p>")
      .css({
        backgroundColor: 'white',
        'top': '50%',
        'left': '50%',
        marginLeft: -210,
        marginTop: -100,
        width: 410,
        paddingRight: 10,
        height: 200,
        'position': 'absolute',
        zIndex: 6000
      })
      .appendTo("body");
  });   
}