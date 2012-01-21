<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php if (isset($title)) echo $title; ?></title>
    <?php 
        if (isset($headers)) {
            foreach( $headers as $value) {
                $this->load->view($value);
            }
        }
        if (isset($javascripts)) {
            foreach( $javascripts as $value) {
                echo '<script type="text/javascript" src="'.base_url().$value.'"></script>';
            }
        }
    ?>
</head>
<body>

    <?php $this->load->view('main/template/body_header'); ?>
    
    <div class="main">
    	<?php if (isset($content)) $this->load->view($content); ?>
    </div>
    
    
    <?php $this->load->view('main/template/fbg'); ?>
    
    <?php $this->load->view('main/template/footer'); ?>

</body>
</html>
