<div class="categorias form">
    <h2><?php echo __('Categoria') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
     <h3><?php echo __('Introduzca Los Datos') ?>:</h3>
<?php
echo $this->Form->create('Categoria',array('type'=>'file'));

echo $this->Form->input('nombre',array('label' =>__('Nombre')));

echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('colore_id',array('label' =>__('Color Button',array('options' => $colores))));

echo $this->Form->input('estado',array('type' => 'hidden','value' => 1));
echo $this->Form->end('Guardar');
?>

    


