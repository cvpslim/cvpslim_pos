<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
    <head>
       <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo Configure::read('Application.name') ?> - <?php echo !empty($title_for_layout) ? $title_for_layout : ''; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <?php echo $this->Html->css('normalize.css') ?>
	<?php echo $this->Html->css('bootstrap-'.Configure::read('Layout.theme').'.min', null, array('data-extra' => 'theme')) ?>
	<?php echo $this->Html->css('bootstrap-responsive.min') ?>
	<?php echo $this->Html->css('style') ?>
        <?php echo $this->Html->css('bootstrap.css') ?>
        <style>
		body {
			padding-top: 10px;
			padding-bottom: 10px;
                        background-color: #00526e;
		}
	</style>
    </head>
    <body>
        <div class="container">
            <?php echo $content_for_layout; ?>
        </div>
        
        

    </body>
</html>
