<div class="content">
<div class="content_resize">
    <div class="forums">
    
    	<h1>CI+Doctrine Message Board</h1>
    
    	<?php foreach($categories as $category): ?>
    
    		<div class="category">
    
    			<h2><?php echo $category->title; ?></h2>
    
    			<?php foreach($category->Forums as $forum): ?>
    
    				<div class="forum">
    
    					<h3>
    						<?php echo anchor('main/forums/display/'.$forum->id, $forum->title) ?>
    						(<?php echo $forum->Threads->count(); ?> threads)
    					</h3>
    
    					<div class="description">
    						<?php echo $forum->description; ?>
    					</div>
    
    				</div>
    
    			<?php endforeach; ?>
    	
    		</div>
    
    	<?php endforeach; ?>
    </div>
</div>
</div>