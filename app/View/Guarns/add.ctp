<div class="guarnicion  form">
    
    <h2><?php echo __('Opcion') ?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Atras </span> ', array('controller'=>'informacionobls','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
        </div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>

<?php
echo $this->Form->create('Guarn');
echo $this->Form->input('nombre');
echo $this->Form->input('precio',array('type' => 'text'));

echo $this->Form->input('informacions_id',array('type' => 'hidden','value' => 200));

echo $this->Form->end('Adicionar');
?>
</div>

