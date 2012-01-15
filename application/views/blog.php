<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
		type="text/css" media="all">
</head>
<body>

<div class="forums">

	<h1>CI+Doctrine Message Board</h1>

	<?php foreach($categories as $category): ?>

		<div class="category">

			<h2><?php echo $category->title; ?></h2>

			<?php foreach($category->Forums as $forum): ?>

				<div class="forum">

					<h3>
						<?php echo anchor('forums/'.$forum->id, $forum->title) ?>
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

</body>
</html>
