<div class="Ingredientes form">
    <h2><?php echo __('jornadas inicial') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
<?php

echo $this->Form->create('Jornada');
echo $this->Form->input('hora_inicio',array('label' =>__('Hora Inicio')));
echo $this->Form->input('fecha_inicio',array('label' =>__('Fecha Inicio')));
echo $this->Form->input('monto_inicial',array('type' => 'text'),array('label' =>__('Monto Inicial')));
echo $this->Form->input('usuario_inicio',array('type' => 'text'),array('label' =>__('Usuario inicio')));

echo $this->Form->end('Adicionar',array('button' =>__('Adicionar')));




?>
</div>





