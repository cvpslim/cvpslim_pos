<div class="subcategorias form">
     <h2><?php echo __('Subcategorias') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index',$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
     <h3><?php echo __('Datos Editables') ?></h3>

<?php
echo $this->Form->create('Subcategoria',array('type'=>'file'));
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('categoria_id',array('label' =>__('Categoria')));

echo $this->Html->image('uploads/subcategoria/imagen/'.$this->data['Subcategoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); 
echo $this->Form->input('imagen',array('label' =>__('Imagen'),'type'=>'hidden'));
echo $this->Form->input('imagen',array('type' =>__('file'),'label'=>'cambiar'));
echo $this->Form->input('estado',array('type' => 'hidden','value' => 1));
echo $this->Form->end('Guardar');
?>
</div>