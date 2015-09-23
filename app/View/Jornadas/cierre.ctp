<div class="cuentas form">
    <h2><?php echo __(' Cierre de Caja') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Jornada');
echo $this->Form->input('id');
echo $this->Form->input('hora_cierre',array('label' =>__('Hora Cierre')));
echo $this->Form->input('monto_cierre',array('type' => 'text'),array('label' =>__('Monto Cierre')));
echo $this->Form->input('usuario_cierre',array('label' =>__('Usuario Cierre')));
echo $this->Form->input('fecha_cierre',array('label' =>__('Fecha Cierre')));
echo $this->Form->end('Editar');
?>
</div>