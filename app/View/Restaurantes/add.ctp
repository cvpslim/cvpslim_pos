<div class="Roles form">
    <h2><?php echo __('Restaurante') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
<h3> <h3> <?php echo __('Introduzca Los Datos') ?></h3></h3>
<?php
echo $this->Form->create('Restaurante');

echo $this->Form->input('nombre',array('label' =>__('nombre')));
echo $this->Form->input('telefono',array('type' => 'text'),array('label'=>__('telefono')));
echo $this->Form->input('direccion',array('label' =>__('direccion')));
echo $this->Form->input('ciudad',array('label' =>__('ciudad')));

echo $this->Form->end('Adicionar');
?>
</div>


