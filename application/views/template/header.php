<?=doctype('xhtml1-trans')?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?=$page_title?></title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <?=meta('description', $page_description)?>
    <?=meta("robots", "noindex,nofollow")?>
    <?=meta("content-type", "text/html;charset=utf-8")?>

    <!-- CSS: these need to come first --> 
    <?=link_tag("static/css/site.css", "stylesheet", "text/css")?>
    <?=link_tag("static/css/jquery-ui-smoothness/css/smoothness/jquery-ui-1.7.2.custom.css", "stylesheet", "text/css")?>    

    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery.js'?>"></script>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("jqueryui", "1.8.13");
    </script>
    <!-- these should all be combined for speed -->
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery.form.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery.dataTables.min.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/highcharts.src.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/date.format.js'?>"></script>
<!-- 
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/BDCCParallelLines.js'?>"></script>
 -->
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery.dateFormat-1.0.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery.qtip-1.0.min.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/site.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/portal_charts.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/twoQtyChart.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/context.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/systems.js'?>"></script>
    <script type="text/javascript"
            src="<?=base_url() . 'static/javascript/jquery-ui-timepicker-addon.js'?>"></script>


  </head>

  <body>
    <div id="action-notice">
      <img src="<?=base_url()?>static/images/ajax-loader-small-9FBFD6.gif" alt="loader" />
      <span>Loading...</span>
    </div>
    <div id="header">
      <div id="logo">
        <img src="<?=base_url()?>static/images/portal_2009.jpg" alt="portal logo" />
      </div>
      <div id="nav">
        <?=ul($tab_list)?>
      </div>
      <div id="site-controls">
      <!--
        [ <a href="http://portal.tenderapp.com" class="support">Help</a> ]
        [ <a href="http://portal.tenderapp.com">Support</a> ] -->
        [ <a href="http://portal.its.pdx.edu">Portal 1.0</a> ]
      </div> 
    </div>
