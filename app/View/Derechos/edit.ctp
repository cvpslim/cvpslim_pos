<div class="cuentas form">
    <h2><?php echo __('Cuentas') ?></h2>
<div class=”Accion”>
	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Derecho');
echo $this->Form->input('id');
echo $this->Form->input('permisos',array('label'=>__('Permisos')));
//echo $this->Form->input('monto_asignado',array('type' => 'text'),array('label'=>__('Monto Asignado')));
echo $this->Form->end('Edit');
?>
</div>
