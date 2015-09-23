<div class="Estados form">
    
    <h2><?php echo __('Idioma') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>

<?php
echo $this->Form->create('Idioma');

echo $this->Form->input('nombre',array('label' =>__('nombre')));
echo $this->Form->input('estandar',array('label' =>__('estandar')));
echo $this->Form->end('Adicionar');
?>
</div>

