<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <?php //echo $this->Html->css('bootstrap.css') ?>

	<?php
	if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . '.css')) {
		echo $this->Html->css($this->params->controller);
	}
	if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . DS . $this->params->action . '.css')) {
		echo $this->Html->css($this->params->controller . '/' . $this->params->action);
	}
	?>


	<?php echo $this->Html->script('lib/modernizr') ?>
        <?php echo $this->Html->script('lib/jquery') ?>
        <?php echo $this->Html->script('lib/bootstrap.min') ?>
        
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"> I.C.E.I</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<!--        <li class="<?php //echo $this->params->controller == 'depoimentos' ? 'active' : ''; ?>">
	<?php //echo $this->Html->link(__('Depoimentos'),array('controller' => 'depoimentos','action' => 'index')) ?>
	</li>-->
        <?php if( AuthComponent::user('id') ) { ?>
            <li class="<?php echo $this->params->controller == 'users' && $this->action == 'home' ? 'active' : '';  ?>">
            <?php echo $this->Html->link('Home',array('controller' => 'users','action' => 'home')) ?>
            </li>
            <li class="<?php echo $this->params->controller == 'edificios' ? 'active' : ''; ?>">
            <?php echo $this->Html->link(__('Edificios'),array('controller' => 'edificios','action' => 'index')) ?>
            </li>
            <?php } ?>
            
<!--       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
        
      </ul>
      
<!--      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
        
      <?php if( AuthComponent::user('id') ) { ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo AuthComponent::user('username')?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(
            '<i class="icon-black icon-off"></i> Logout','/users/logout',
            array(
            'tabindex' => '-1',
            'escape' => false
            )
            ) ?>
            </li>
<!--            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>-->
          </ul>
        </li>
      </ul>
      <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    
    <div class="container" role="main" id="main">

					<?php echo $this->Session->flash();?>	
                                            
						<?php echo $this->fetch('content'); ?>

						<hr>

						<footer>
							<p>&copy; <?php echo Configure::read('Application.name') ?> 2012</p>
						</footer>

					</div> <!-- /container -->
</body>
</html>