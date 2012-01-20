<div class="content">
<div class="content_resize">
    <div class="mainbar">
        <div class="forums">
            <h1><?php echo $title ?></h1>
            
            <?php foreach($posts as $post): ?>
            <div class="forum">
            
            	<h2>
            		<?php echo $post['username']; ?> said,  
            	</h2>
            	<div>
            		<p><em><?php echo $post['content']; ?></em></p>
            		<p>@ <?php echo $post['post_date']; ?></p>
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
