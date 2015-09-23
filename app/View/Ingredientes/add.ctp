<div class="Ingredientes form">
    <h2><?php echo __('Ingredientes') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
<?php

echo $this->Form->create('Ingrediente',array('type'=>'file'));


echo $this->Form->input('nombre',array('label' =>__('Nombre')));
//echo $this->Form->input('tipo',array('label' =>__('Tipo')));
echo $this->Form->input('precio',array('type' => 'text'),array('label' =>__('Precio')));
//echo $this->Form->input('imagen',array('type'=>'file'),array('label' =>__('Imagen')));
echo $this->Form->end('Adicionar',array('button' =>__('Adicionar')));




?>
</div>





