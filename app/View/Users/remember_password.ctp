<?php echo $this->Session->flash() ?>
<div class="row-fluid">
	<div class="span12">
	<?php
	echo $this->Form->create
	(
		'User',
		array
		(
			'url' => array
			(
				'controller' => 'users',
				'action'	 => 'remember_password'
			),
			'class'			=> 'well span12 center',
			'inputDefaults' => array
			(
				'label' => false,
				'error' => false
			)
		)
	); 
	?>
		<h3><?php echo __('¿Olvido su clave?') ?></h3>
		<p>Introdusca su correo electronico, verifique que sea el que esta asociado a su cuenta. </p>

	<?php echo $this->Form->input('email',array('placeholder' => __('E-mail'),'class' => 'span3 email-field')); ?> 
	  <div class="control-group">
	    <div class="controls">
	      <button type="submit" class="btn btn-primary"><?php echo __('Recordar mi clave') ?></button>      
	    </div>
	  </div>

	</form>
	</div>
</div>