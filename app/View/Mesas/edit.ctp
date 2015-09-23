<div class="mesas form">
    <h2><?php echo __('Mesas') ?> </h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index',$area_id),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
 <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Mesa');
echo $this->Form->input('id');
echo $this->Form->input('nrosillas',array('type' => 'text'),array('label' =>__('Numero de Sillas')));
echo $this->Form->input('tipo',array('label' =>__('Tipo')));
echo $this->Form->input('area_id',array('label' =>__('Area')));


echo $this->Form->end('Editar');
?>
</div>


