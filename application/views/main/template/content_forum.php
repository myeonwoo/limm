
<div class="content">
<div class="content_resize">
    <div class="mainbar">
    
        <div id="dialog-form-thread" title="Create new user">
        	<p class="validateTips">All form fields are required.</p>
        
        	<form id="user_form" action="http://localhost/limm/index.php/main/forums/thread_insert" method="post">
        	<fieldset>
        		<?php echo form_hidden('forum_id',$this->uri->segment(4));?>
        		<label>Title:</label>
        		<div class="clr"></div>
        		<textarea name="thread_title" id="thread_title" cols="50" rows="2" ></textarea> 
        		<div class="clr"></div>
        		<label>Content:</label>
        		<div class="clr"></div>
        		<textarea name="post_comment" id="post_comment" cols="50" rows="5" ></textarea>

        		<input type="submit" name="submit" id="user_submit" style="visibility:hidden" value="create"  /> 
        	</fieldset>
        	</form>
        </div>
        
    	<div class="forums">
            <h1><?php echo $forum_title ?></h1>
            <h2></h2>
            <?php foreach($threads as $thread): ?>
            	<div class="forum">
            
            	<h3>
            		<?php echo anchor('main/threads/display/'.$thread['id'], $thread['title']) ?>
            		(<?php echo $thread['num_replies']; ?> replies)
            	</h3>
            
            	<div>
            		Author: <em><?php echo anchor('profile/display/'.$thread['user_id'], $thread['username']); ?></em>,
            		Last Post: <em><?php echo $thread['last_post_date']; ?></em>
            	</div>
            
            	</div>
            <?php endforeach; ?>
            
            <?php if (isset($pagination)): ?>
            	<div class="pagination">
            		Pages: <?php echo $pagination; ?>
            	</div>
            <?php endif; ?>
        </div>
        
        <button id="create-thread-post">Post another</button>
    </div>
    
    <div class="sidebar">
    	
    </div>
    <div class="clr"></div>

</div></div>
