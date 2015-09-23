<div class="cuentas form">
    <h2><?php echo __('Estados') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('TipoCambio');
echo $this->Form->input('id');
echo $this->Form->input('moneda1_id',array('label' =>__('Moneda1')));

echo $this->Form->input('valor',array('type' => 'text'),array('label' =>__('Valor')));
echo $this->Form->end('Guardar');
?>
</div>

