<?php
echo $this->Form->create
(
	'User',
	array
	(
		'url' => array
		(
			'controller' => 'users',
			'action'	 => 'login'
		),
		'class'			=> 'well',
		'inputDefaults' => array
		(
			'label' => false,
			'error' => false
		)
	)
); 


echo $this->Form->input('username',array('placeholder' => __('Usuário'),'class' => 'span12'));
echo $this->Form->input('password',array('placeholder' => __('Clave'),'type' => 'password', 'class' => 'span12'));

?> 
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary"><i class="icon-play-circle icon-white"></i> <?php echo __('Iniciar sesión')
	
 ?></button>      
    </div>
  </div>

  <div class="control-group">
  	<div class="controls">
  		<span><?php echo __('¿Olvido su clave?') ?><br/> <?php echo $this->Html->link(__('Recordar mi clave'),array('controller' => 'users', 'action' => 'remember_password')) ?></span>
  	</div>
  </div> 
</form>