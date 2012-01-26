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