<div class="cuentas form">
    <h2><?php echo __('Opcion') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Guarn');
echo $this->Form->input('id');
echo $this->Form->input('nombre');
echo $this->Form->input('precio',array('type' => 'text'));

echo $this->Form->end('Editar');
?>
</div>

