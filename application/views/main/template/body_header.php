<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <?php
              if ( isset($header_menu_list) && isset($header_menu_select))
                  foreach( $header_menu_list as $key=> $value){
                      if($value == $header_menu_select)
                          echo '<li class="active"><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
                      else
                          echo '<li><a href="'. base_url().'index.php/'.$key.'">'.$value.'</a></li>';
                  }

          ?>
        </ul>
        <div class="user_controls">
            <?php $this->load->view('main/template/user_controls'); ?>
    	</div>
      </div>
      
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
</div>