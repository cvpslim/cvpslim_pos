<div class="Cuentas form">
    <h2><?php echo __('Anulaciones') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
 
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
    
<?php
echo $this->Form->create('Anulacion');
echo $this->Form->input('motivo');
echo $this->Form->input('texto libre',array('label' =>__('Descripcion')));

echo $this->Form->end('Guardar');
?>
</div>


