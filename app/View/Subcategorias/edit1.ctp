<?php foreach ($imgs as $img): ?>
<?php $img=$img['subcategorias']['imagen']?>
<?php endforeach;?>

<div class="subcategorias form">
     <h2><?php echo __('Subcategorias') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
     <h3><?php echo __('Datos Editables') ?></h3>

<?php
echo $this->Form->create('Subcategoria',array('type'=>'file'));
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('categoria_id',array('label' =>__('Categoria')));

 if($img==null){
echo $this->Html->image('uploads/subcategoria/imagen/'.'default.jpg', array('alt' => 'image','height'=>'100', 'width'=>'100')); 
 }
 else {
     echo $this->Html->image('uploads/subcategoria/imagen/'.$this->data['Subcategoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); 

}
echo $this->Form->input('imagen',array('label' =>__('Imagen'),'type'=>'hidden'));
echo $this->Form->input('imagen',array('type' =>__('file'),'label'=>'cambiar'));

echo $this->Form->input('colore_id',array('label' =>__('Color Button')),array('options' => $colores));

echo $this->Form->input('estado',array('type' => 'hidden','value' => 1));
echo $this->Form->end('Guardar');
?>
</div>
