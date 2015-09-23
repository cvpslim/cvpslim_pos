<div class="cuentas form">
    <h2><?php echo __('Cuentas') ?></h2>
<div class=”Accion”>
	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar</span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Colore');
echo $this->Form->input('id');
echo $this->Form->input('nombre');
echo $this->Form->input('codigo');
echo $this->Form->end('Guardar');
?>
</div>