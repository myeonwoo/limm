<html>
<head>
  <title>Select and Go Navigation</title>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jumpmenu.js">
  </script> 
</head>
<body>
<div align="center">
  <form action="gotoLocation.cgi">
    <select id="newLocation">
      <option selected="selected">Select a destination</option>
      <option value="hawaii">Hawaii</option>
      <option value="alaska">Alaska</option>
      <option value="california">California</option>
      <option value="florida">Florida</option>
    </select>
    <noscript>
      <input type="submit" value="Go There!" />
    </noscript>
  </form>
</div>
</body>
</html>
