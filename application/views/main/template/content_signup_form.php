  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article"> 
          
            <div id="signup_form">
            
                <p class="heading">New User Signup</p>
                
                <?php echo form_open('main/signup/submit'); ?>
                
                <p>
                	<label>First Name:</label>
                	<?php echo form_input('firstname');?>
                </p>
                <p>
                	<label>Last Name:</label>
                	<?php echo form_input('lastname');?>
                </p>
                <p>
                	<label for="username">Username: </label>
                    <?php echo form_input('username'); ?>
                </p>
                <p>
                	<label for="password">Password: </label>
                    <?php echo form_password('password'); ?>
                </p>
                <p>
                	<label for="passconf">Confirm Password: </label>
                    <?php echo form_password('passconf'); ?>
                </p>
                <p>
                	<label for="email">E-mail: </label>
                    <?php echo form_input('email'); ?>
                </p>
                <p>
                    <?php echo form_submit('submit','Create my account'); ?>
                </p>
                

                <?php echo form_close(); ?>
            </div>

        </div>
      </div>
      
      
      
      <div class="sidebar">
        <div class="gadget">
          <h3>Requirements for signup</h3>
          <div class="clr"></div>
          <ul class="sb_menu">
          	<li>1. All fields are required.
            <li>2. Username: 6 - 12 in length</li>
            <li>3. Pasword: 6 - 12 in length</li>
          </ul>
        </div>
        <?php echo validation_errors('<div id="signup_form"><p class="error">','</p></div>'); ?>
        
      </div>
      <div class="clr"></div>
      
      
    </div>
  </div>