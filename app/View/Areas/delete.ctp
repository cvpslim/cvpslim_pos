<div class="areas form">
<?php

echo $this->Form->inputs(array('id'));
echo $this->Form->end('Eliminar');
?>
</div>

<div class="actions">
	<h3><?php __('Acciones') ?></h3>
	<ul>
		<li><?php echo $this->Html->link('LISTA DE CATEGORIAS', array('action' => 'index'));?></li>
	</ul>
</div>

