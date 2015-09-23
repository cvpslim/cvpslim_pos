<div class="Cuentas form">
    <h2><?php echo __('Cuentas') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
 
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
    
<?php
echo $this->Form->create('Tipodebillete');

echo $this->Form->input('cantidad',array('label'=>__('Tipo Pago')));

echo $this->Form->input('tipo_cambio_id',array('options' => $fuentes));

echo $this->Form->end('Adicionar');
?>
</div>


