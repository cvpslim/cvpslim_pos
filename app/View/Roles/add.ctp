<div class="Roles form">
    <h2><?php echo __('Cargos') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
<h3> <h3> <?php echo __('Introduzca Los Datos') ?></h3></h3>
<?php
echo $this->Form->create('Role');

echo $this->Form->input('cargo',array('label' =>__('Cargo')));
echo $this->Form->input('funciones',array('label' =>__('Funciones')));
//echo $this->Form->input('sueldo',array('type' => 'text'),array('label'=>__('Sueldo')));

echo $this->Form->end('Guardar');
?>
</div>


