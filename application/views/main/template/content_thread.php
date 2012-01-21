<div class="content">
<div class="content_resize">
    <div class="mainbar">
        <div class="forums">
            <h2><?php echo $thread_title ?></h2>
            
            <?php foreach($posts as $post): ?>
            <div class="forum">
            
            	<h2>
            		<?php echo $post['username']; ?> said,  
            	</h2>
            	<div>
            		<p><?php echo $post['content']; ?></p>
            		<p><em>@ <?php echo $post['post_date']; ?></em></p>
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
    <div class="clr"></div>
</div>
</div>
