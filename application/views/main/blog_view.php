
<div class="main">
<div class="content">
<div class="content_resize">
<h2><?=$heading?></h2> <br />

<?php foreach($query->result() as $row):?>

<h1><?=$row->title?> <small><?=$row->body?></small></h1>

<h3><?=$row->title?></h3>
<p><?=$row->body?></p>
<p><?=anchor('blog/comments/'.$row->id,'Comments');?> </p>

<hr>
<?php endforeach;?>
</div>
</div>
</div>