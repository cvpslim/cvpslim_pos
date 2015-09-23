<div class="cuentas form">
    <h2><?php echo __(' Tipo de cambio') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Idioma');
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('estandar',array('label' =>__('Estandar')));
echo $this->Form->end('Editar');
?>
</div>

