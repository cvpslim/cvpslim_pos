<div class="Mesas form">
    <h2><?php echo __('Mesas') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks">  volver a areas </span> ', array('controller' => 'areas','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Mesa');

//echo $this->Form->input('id',array('label' =>__('id')));
echo $this->Form->input('nrosillas',array('label' =>__('Numero de Sillas'),'type' => 'text'));
echo $this->Form->input('tipo',array('label' =>__('Tipo/Nombre')));

echo $this->Form->input('area_id',array('type' => 'hidden','value' => $area_id));

echo $this->Form->end('Adicionar');
?>
</div>


