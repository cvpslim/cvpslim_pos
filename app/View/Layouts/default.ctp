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
	<style>
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
                
                /*.nav li ul{
                    display:none;
                    position: absolute;
                    min-width:140px;
                }*/
                /*.nav li:hover>ul{
                    display:block;
                    
                }*/
                
                /*.nav li ul li {
                    position:relative;
                }*/
                
                /*.nav li ul li ul {
                    right:-140px;
                    top:0px;
                }*/
	</style>
        <?php echo $this->Html->css('bootstrap.css') ?>
	<?php echo $this->Html->css('normalize.css') ?>
	<?php echo $this->Html->css('bootstrap-'.Configure::read('Layout.theme').'.min', null, array('data-extra' => 'theme')) ?>
	<?php echo $this->Html->css('bootstrap-responsive.min') ?>
	<?php echo $this->Html->css('style') ?>
        

	<?php
	if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . '.css')) {
		echo $this->Html->css($this->params->controller);
	}
	if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . DS . $this->params->action . '.css')) {
		echo $this->Html->css($this->params->controller . '/' . $this->params->action);
	}
	?>


	<?php echo $this->Html->script('lib/modernizr') ?>
        <?php echo $this->Html->script('lib/admin_ajax') ?>
        <?php echo $this->Html->script('lib/jquery') ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
		
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">		
        <div class="container">	
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						
                <span class="icon-bar"></span>		
                <span class="icon-bar"></span>				
                <span class="icon-bar"></span>			
            </a>	                
                <?php 
                         echo $this->Html->image("logo2.png", array('class' => 'brand'));
                          // echo $this->Html->link( Configure::read('Application.name') ,"/",array('class' => 'brand')) 
                ?>
            <div class="nav-collapse">			
                <ul class="nav">			
                    <?php if( AuthComponent::user('id') ) { ?>
                    <li class="<?php echo $this->params->controller == 'users' && $this->action == 'home' ? '' : '';  ?>">	
                        <?php echo $this->Html->link(__('PRINCIPAL'),array('controller' => 'users','action' => 'home')) ?>
                       
                        
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i>  CONFIGURACION <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Configuracion</li>
  
                            <li><?php //echo $this->Html->link(__('Ingredientes'),array('controller' => 'ingredientes','action' => 'index')) ?></li>
                          
                            <li><?php echo $this->Html->link(__('Impresora'),array('controller' => 'impresoras','action' => 'index')) ?></li>
                            <li><?php echo $this->Html->link(__('Anulacion '),array('controller' => 'anulacions','action' => 'index')) ?></li>
                            <li><?php echo $this->Html->link(__('Descuentos '),array('controller' => 'descuentos','action' => 'index')) ?></li>
                            <li><?php echo $this->Html->link(__('Tipo de Cambio'),array('controller' => 'TipoCambios','action' => 'index')) ?></li>
                           
                        </ul>
                    </li>
                    
                    </li>
                    
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cutlery"></i> MENU <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"> MENU</li>
                             
                               <li >
                                            <?php echo $this->Html->link(__('Categoria'),array('controller' => 'categorias','action' => 'index')) ?>
                                            
                                   </li>
                              
                              <li>
                                            <?php echo $this->Html->link(__('Subcategoria'),array('controller' => 'subcategorias','action' => 'index1')) ?>
                                            
                                   </li>
                                   
                                   <li>
                                           <?php echo $this->Html->link(__('Producto'),array('controller' => 'productos','action' => 'index1')) ?>
                                            
                                   </li>
                                   
                                   
                                   
                                               
                                            <li class="dropdown-header">-------------------------------</li>
                                            <li><?php echo $this->Html->link(__('Modificadores'),array('controller' => 'adicionalguarns','action' => 'index')) ?></li> 
                                            
                                             <li> <?php echo $this->Html->link(__('Informacion obligatoria '),array('controller' => 'informacions','action' => 'index1')) ?></li> 
                               
                        </ul>
                    </li>
                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cutlery"></i>    DATOS DE RESTAURANT  <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Datos del restaurant</li>
                            
                             <li> <?php echo $this->Html->link(__('Restaurant'),array('controller' => 'restaurantes','action' => 'edit',11)) ?></li>
                            <li> <?php echo $this->Html->link(__('Areas'),array('controller' => 'areas','action' => 'index')) ?></li>
                            <li> <?php echo $this->Html->link(__('Personal'),array('controller' => 'personals','action' => 'index')) ?>
                                           </li>
                          
                               <li class="divider"></li>
                                            <li class="dropdown-header">---------------------------------</li>
                                            <li><?php echo $this->Html->link(__('Cargos de personal '),array('controller' => 'roles','action' => 'index')) ?></li> 
                                            
                                                         
                                   
                             
                        </ul>
                        
                       </li>
                       
                        	
                    
                    
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i>     CLIENTE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Cliente</li>
                            <li><?php echo $this->Html->link(__('Cliente'),array('controller' => 'clientes','action' => 'index')) ?></li>
                                    
                         
                        </ul>
                    </li>    
                    
                    
                 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-print"></i> FACTURA <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Factura</li>
                            <li><?php echo $this->Html->link(__('Datos de la factura'),array('controller' => 'datosfacturas','action' => 'edit',1)) ?></li>
                              
                        </ul>
                  </li>
                  
<!--                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cutlery"></i> Reportes <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Reportes</li>
                            
                             <li> <?php echo $this->Html->link(__('Ventas total '),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por Categoria'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por Sub-categoría'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por producto'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por Cliente'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por personal'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por clase comida'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas con credit card, '),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas con Coupon'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Compras por personal'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Ventas por cargo'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Reporte de descuentos'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Reporte de anulaciones'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Reporte de cliente'),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Reporte de personal '),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                             <li> <?php echo $this->Html->link(__('Reporte de caja inicio '),array('controller' => 'restaurantes','action' => 'index')) ?></li>
                
                        </ul>
                        
                       </li>
                    -->
                        <?php } ?>
                   
                    
                </ul>
                
                    <?php if( AuthComponent::user('id') ) { ?>				
                <ul class="nav pull-right">						
                    <li id="fat-menu" class="dropdown">						
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">							
                            <i class="icon-black icon-user"></i> 							
                                <?php echo AuthComponent::user('username') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
												<li>
													<?php echo $this->Html->link(
													'<i class="icon-black icon-off"></i> '.__('Cerrar sesión'),'/users/logout',
													array(
													'tabindex' => '-1',
													'escape' => false
													)
													) ?>
												</li>
                                                                                                <li>
													<?php echo $this->Html->link(
													'<i class="glyphicon glyphicon-lock"></i> '.__('Cambiar clave'),'/users/change_password',
													array(
													'tabindex' => '-1',
													'escape' => false
													)
													) ?>
												</li>
											</ul>
										</li>
									</ul>   
									<?php } ?>

								</div><!--/.nav-collapse -->
							</div>
						</div>
					</div>

					<div class="container" role="main" id="main">

					<?php echo $this->Session->flash();?>	
                                            
						<?php echo $this->fetch('content'); ?>

						<hr>

						<footer>
							<p>&copy; <?php echo Configure::read('Application.name') ?> - <?php echo date('Y') ?></p>
						</footer>

					</div> <!-- /container -->

					<script src="js/lib/jquery.js"></script>
					<script>window.jQuery || document.write('<script src="<?php echo $this->params->webroot ?>js/lib/jquery.min.js"><\/script>')</script>

					<?php
					if (is_file(WWW_ROOT . 'js' . DS . $this->params->controller . '.js')) {
						echo $this->Html->script($this->params->controller);
					}
					if (is_file(WWW_ROOT . 'js' . DS . $this->params->controller . DS . $this->params->action . '.js')) {
						echo $this->Html->script($this->params->controller . '/' . $this->params->action);
					}
					?>

					<?php echo $this->Html->script(
					array(
					'lib/bootstrap.min',
					'src/scripts.js'
					));
					?>

					<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
					<script>
						var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
						(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
							g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
							s.parentNode.insertBefore(g,s)}(document,'script'));
					</script>				
</body>				
</html>