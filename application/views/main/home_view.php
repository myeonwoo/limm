
<div class="main">
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Template</span> License</h2>
          <div class="clr"></div>
          <p class="infopost">
          	<span class="date">On 11 sep 2018</span> Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under 
          	<a href="#">templates</a>, <a href="#">internet</a> &nbsp;|&nbsp; with 
          	<a href="#" class="com">Comments (<span>11</span>)</a>
          </p>
          <img src="<?php echo base_url(); ?>images/main/img1.jpg" width="201" height="146" alt="" class="fl" />
          <p>This is a free CSS website template by RocketWebsiteTemplates.com. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to RocketWebsiteTemplates.com.</p>
          <p>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla. Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
          <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
        </div>
        <div class="article">
          <h2><span>Future</span> technology</h2>
          <div class="clr"></div>
          <p class="infopost"><span class="date">On 29 aug 2010</span> Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> &nbsp;|&nbsp; with <a href="#" class="com">Comments (<span>7</span>)</a></p>
          <img src="<?php echo base_url(); ?>images/main/img2.jpg" width="201" height="141" alt="" class="fl" />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
          <p>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla. Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
          <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
        </div>
      </div>
      
      <div class="sidebar">
          
      	<?php
      	    if (!($user = Current_User::user())){
      	        echo form_open('main/home/submit');
      	        echo form_input('username', '');
      	        echo ' User Name  ';
      	        echo form_password('password', '');
      	        echo ' Password  ';
      	        echo form_submit('submit', 'Login');
      	        echo anchor('register/login/signup', 'Create Account');
      	        echo form_close();
      	        
            }
        ?>
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#">list 1</a><br /> blar blar</li>
            <li><a href="#">list 2</a><br /> blar blar</li>

          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
