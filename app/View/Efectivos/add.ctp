<div class="Mesas form">
    <h2><?php echo __('Introdusca el efectivo') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks">  volver a areas </span> ', array('controller' => 'areas','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Efectivo');

//echo $this->Form->input('id',array('label' =>__('id')));
echo $this->Form->input('cambio',array('type' => 'text'),array('label' =>__('Numero de Sillas')));
echo $this->Form->end('Adicionar');
?>
</div>


