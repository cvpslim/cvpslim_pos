<div class="Impresoras form">
    <h2><?php echo __('Informacion Obligada') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    
<h3> <h3> <?php echo __('Introduzca Los Datos') ?></h3></h3>
<?php

echo $this->Form->create('Informacion');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('pregunta');
echo $this->Form->input('numero_id',array('options' => $numeros));
echo $this->Form->input('tipo',array('type' => 'hidden','value' => 1));
echo $this->Form->end('Guardar');


?>

</div>


