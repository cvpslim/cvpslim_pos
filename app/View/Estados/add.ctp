<div class="Estados form">
    
    <h2><?php echo __('Estados') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>

<?php
echo $this->Form->create('Estado');

echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->end('Adicionar');
?>
</div>

