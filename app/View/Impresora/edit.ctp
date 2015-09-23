<div class="impresoras form">
    <h2><?php echo __('Impresoras') ?></h2>
    <div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index',),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Impresora');

echo $this->Form->input('id');
echo $this->Form->input('IP');
echo $this->Form->input('lugar');


echo $this->Form->end('Guardar');
?>
</div>
