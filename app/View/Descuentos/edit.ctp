<div class="clientes form">
    <h2><?php echo __('Descuento') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?> </h3>
<?php
echo $this->Form->create('Descuento');
echo $this->Form->input('id');
echo $this->Form->input('motivo',array('type' => 'text'),array('label' =>__('Categoria')));

echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('porcentaje',array('type' => 'text'),array('label' =>__('Porcentaje')));


echo $this->Form->end('Guardar');
?>
</div>






