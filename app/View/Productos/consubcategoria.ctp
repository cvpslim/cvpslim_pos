<div class="Productos form">
    
    <h2><?php echo __('Productos') ?> </h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>




<?php
echo $this->Form->create('Producto',array('type'=>'file'));
echo $this->Form->input('clase_id',array('label' =>__('Clase producto')),array('options' => $clases));
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('precio',array('type' => 'text'),array('label' =>__('Precio')));
echo $this->Form->input('descripcion',array('type' => 'text'),array('label' =>__('Precio')));
echo $this->Form->input('imagen',array('type'=>'file'),array('label' =>__('Imagen')));
echo $this->Form->input('subcategoria_id',array('type' => 'hidden','value' => $id_sub));
echo $this->Form->input('colore_id',array('label' =>__('Color de boton')));
echo $this->Form->input('fuente_id',array('label' =>__('Color de fuente')));
echo $this->Form->input('area_id',array('label' =>__('Estacion Impresion')));
echo $this->Form->end('Adicionar',array('button' =>__('Adicionar')));
?>
</div>