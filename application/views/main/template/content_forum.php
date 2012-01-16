<div class="content">
<div class="content_resize">
    <h2><?php echo $title ?></h2>
    
    <?php foreach($threads as $thread): ?>
    <div class="thread">
    
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
    
</div></div>
