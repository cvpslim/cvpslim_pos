	<?php echo $this->Session->flash() ?>
	<div class="hero-unit">
		<h2><?php echo __('Usuário')?>, <?php echo AuthComponent::user('username') ?>.</h2>
		<p>Este es el mensaje o pagina principal del usuario logueado</p>
	</div>