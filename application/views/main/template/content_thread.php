<div class="content">
<div class="content_resize">
    <div class="mainbar">
   
    	<div class="comments">
        	<a class="add_comment_link" href="#respond">Add Comment</a>
        	<h1 class="comments-header"> Subject: <span><?php echo $thread_title ?></span> </h1>
        	<ol class="commentlist">
        		
        		<li class="comment even thread-even depth-1 parent">
        			<div class="comment-body">
        
        				<div class="comment-author">
        					<img class="avatar"src="http://localhost/limm/images/users/user1.png" alt="">
        					<cite class="fn">
        						<a class="url" rel="external nofollow" href="#" target="blank">Timothy Warren</a>
        					</cite>
        				</div>
        
        				<div class="date">January 23, 2012 at 6:01 pm</div>
        				<div class="clr"></div>
        				
        				<div class="content">.htaccess files work on Windows…they just don’t work with IIS, since they are an Apache file.</div>
        				
        				<div class="reply">
        					<a class="comment-reply-link" href="#">Reply</a>
        				</div>
        
        			</div>
        			
        			<ul class="children">
        				<?php foreach($posts as $post): ?>
                		
        				<li class="comment odd alt depth-2">
        					<div class="comment-body">
        						<div class="comment-author vcard">
            						<img class="avatar" src="http://localhost/limm/images/users/user1.png" alt="">
            						<cite class="fn">
            						<a class="url" rel="external nofollow" href="#" ><?php echo $post['firstname']; ?></a>
            						</cite>
        						</div>
        						
        						<div class="date"><?php echo $post['post_date']; ?></div>
        						<div class="clr"></div>
        						
        						<p><?php echo $post['content']; ?></p>
        						
        						<div class="reply">
        						<a class="comment-reply-link" href="#">Reply</a>
        						</div>
        					</div>
        				</li>
        				
        				<?php endforeach; ?>
        			</ul>
        		</li>
        		
        	</ol>
        
        </div>
    
    </div>
    <div class="clr"></div>



</div>
</div>
