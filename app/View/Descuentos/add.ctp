<div class="Clientes form">
    <h2><?php echo __('Descuentos') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Descuento');

echo $this->Form->input('motivo',array('type' => 'text'),array('label' =>__('Categoria')));

echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('porcentaje',array('type' => 'text'),array('label' =>__('Porcentaje')));



echo $this->Form->end('Guardar');
?>
</div>


