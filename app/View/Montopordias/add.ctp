<div class="Mesas form">
    <h2><?php echo __('Introdusca el efectivo') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks">  volver a areas </span> ', array('controller' => 'areas','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Montopordia');

//echo $this->Form->input('id',array('label' =>__('id')));
echo $this->Form->input('efectivo_id',array('options' => $cambios),array('type' => 'text'));
echo $this->Form->input('jornada_id',array('options' => $jornadas),array('type' => 'text'));
echo $this->Form->input('cantidad',array('type' => 'text'));
echo $this->Form->end('Adicionar');
?>
</div>


