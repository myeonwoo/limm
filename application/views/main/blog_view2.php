
<div class="main">
<div class="content">
<div class="content_resize">
<h2><?=$heading?></h2> <br />

<?php foreach($query->result() as $row):?>

<h1><?php echo $row->title?> <small><?php echo $row->body?></small></h1>

<h3><?php echo $row->title?></h3>
<p><?php echo $row->body?></p>
<p><?php echo anchor('blog/comments/'.$row->id,'Comments');?> </p>

<hr>
<?php endforeach;?>
</div>
</div>
</div>