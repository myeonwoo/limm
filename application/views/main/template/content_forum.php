<div class="content">
<div class="content_resize">

    <div class="mainbar">
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
    </div>
    <div class="sidebar">
    	<?php echo form_open('main/forums/thread_insert');?>
    	<?php echo form_hidden('forum_id',$this->uri->segment(4));?>
    	<p>
    		<label>Thread title:</label>
    		<?php echo form_input('thread_title');?>
    	</p> 
    	<p>
    		<label>comment:</label>
    		<?php echo form_textarea('post_comment','')?>
    	</p>
    	<p>
    	    <?php echo form_submit('submit','Post'); ?>
    	</p>
    	
    	<?php echo form_close();?>
    </div>
    <div class="clr"></div>

</div></div>
