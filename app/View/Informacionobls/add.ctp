<div class="Impresoras form">
    <h2><?php echo __('Informacion Obligada') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
<h3> <h3> <?php echo __('Introduzca Los Datos') ?></h3></h3>
<?php
echo $this->Form->create('Informacionobl');

echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('pregunta');
echo $this->Form->end('Adicionar');

?>

</div>


