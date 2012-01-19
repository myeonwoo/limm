<div class="content">
<div class="content_resize">
    <h2><?php echo $title ?></h2>
    
    <?php foreach($posts as $post): ?>
    <div class="thread">
    
    	<h3>
    		(<?php echo $post['username']; ?> said)
    	</h3>
    
    	<div>
    		<em><?php echo $post['content']; ?></em>,
    		Date: <em><?php echo $post['post_date']; ?></em>
    	</div>
    
    </div>
    <?php endforeach; ?>
    
    <?php if (isset($pagination)): ?>
    	<div class="pagination">
    		Pages: <?php echo $pagination; ?>
    	</div>
    <?php endif; ?>
    
</div></div>
