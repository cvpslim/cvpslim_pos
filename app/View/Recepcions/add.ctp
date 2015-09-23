<div class="Area_recepcion form">
    <h2><?php echo __('Area_recepcions') ?></h2>
<div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
<h3> <h3> <?php echo __('Introduzca Los Datos') ?></h3></h3>
<?php
echo $this->Form->create('Recepcion');

echo $this->Form->input('id',array('type'=>'text'));

echo $this->Form->input('lugares');

echo $this->Form->end('Adicionar');
?>
</div>


