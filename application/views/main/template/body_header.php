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
            <?php
                if ($user = Current_User::user()){
                    echo 'Hello, <em>'.$user->username.'</em>'.anchor('main/home/logout', 'Logout');
                } else {
                    //echo anchor('main/login','Login');
                    echo '<a id="dialog-form-login-open" href="#">Login</a>';
                    echo '<a id="dialog-form-register-open" href="#">Register</a>';
                    //echo anchor('main/signup', 'Register');
                }
                    
            ?>
    	</div>
    	
    	<div class="clr"></div>
    	<div id="signup_form"><p class="error"><?php if(isset($user_message)) echo $user_message;?></p></div>
      </div>
      
      <div class="logo">
        <h1><a href="#">woodbird <small>myeonwoo</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
    
    <div id="dialog-form-login" title="Login Form">
    	<p class="dialog-form-login-validateTips">All form fields are required.</p>
    
    	<form id="user_form" action="<?php echo base_url().'main/home/submit';?>" method="post">
    	<fieldset>
    		<?php echo form_hidden('forum_id',$this->uri->segment(4));?>
    		<label>username:</label>
    		<div class="clr"></div>
    		<input name="username" id="username" ></input> 
    		<div class="clr"></div>
    		<label>password:</label>
    		<div class="clr"></div>
    		<input name="password" id="password"></input>

    		<input type="submit" name="submit" id="login_submit" value="submit"  /> 
    	</fieldset>
    	</form>
    </div>
    
    
    <div id="dialog-form-register" title="Register Form">
    	<p class="dialog-form-register-validateTips">All form fields are required.</p>
    
    	<form id="user_form" action="<?php echo base_url().'register/signup/submit';?>" method="post">
    	<fieldset>
    		<?php echo form_hidden('forum_id',$this->uri->segment(4));?>
    		<label>First Name:</label>
    		<div class="clr"></div>
    		<input type="text" name="firstname" id="firstname" ></input> 
    		<div class="clr"></div>
    		<label>Last Name:</label>
    		<div class="clr"></div>
    		<input type="text" name="lastname" id="lastname"></input>
    		<div class="clr"></div>
    		<label>Username:</label>
    		<div class="clr"></div>
    		<input type="text" name="username" id="username"></input>
    		<div class="clr"></div>
    		<label>Password:</label>
    		<div class="clr"></div>
    		<input type="text" name="password" id="password"></input>
    		<div class="clr"></div>
    		<label>Confirm Password:</label>
    		<div class="clr"></div>
    		<input type="password" name="passconf" id="passconf"></input>
    		<div class="clr"></div>
    		<label>E-mail:</label>
    		<div class="clr"></div>
    		<input type="text" name="email" id="email"></input>

    		<input type="submit" name="submit" id="register_submit" style="visibility:hidden" value=""  /> 
    	</fieldset>
    	</form>
    </div>
    
</div>

