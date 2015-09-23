<div class="guarnicion  form">
    
    <h2><?php echo __('Modificadores') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atras </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
        </div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>

<?php
echo $this->Form->create('Adicionalguarn');
echo $this->Form->input('nombre');
echo $this->Form->input('precio',array('type' => 'text'));
echo $this->Form->end('Guardar');
?>
</div>

