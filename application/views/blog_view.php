<html>
<head>
<title><?=$title?></title>

</head>
<body>
<h1><?=$heading?></h1>

<?php foreach($query->result() as $row):?>

<h3><?=$row->title?></h3>
<p><?=$row->body?></p>
<p><?=anchor('blog/comments/'.$row->id,'Comments');?> </p>

<hr>
<?php endforeach;?>

</body>
</html>