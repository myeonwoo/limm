<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $title; ?> | CI+Doctrine Message Board</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
    type="text/css" media="all">
</head>
<body>

<div class="<?php echo $container_css; ?> container">

  <div class="user_controls">
    <?php $this->load->view('user_controls'); ?>
  </div>

  <h1>CI+Doctrine Message Board</h1>

  <?php $this->load->view($content_view); ?>

</div>

</body>
</html>
