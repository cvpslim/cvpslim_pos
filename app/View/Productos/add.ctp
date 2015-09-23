<div class="Productos form">
    

    
    <h2><?php echo __('Productos') ?> </h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>

    
   
                                                           
<?php $miarray = array(); // creo el array
?>
                                                           
    <?php foreach ($lista1s as $lista1 ): ?>
        <?php $cate = array('cat'=>$lista1['categorias']['nombre']); ?>
    <?php 
                 $sub = array();
    foreach ($lista3s as $lista3): ?>
        
    <?php if($lista1['categorias']['id']==$lista3['subcategorias']['categoria_id']) {
        
        array_push($sub,array('id'=>$lista3['subcategorias']['id'],'subactegoria'=>$lista3['subcategorias']['nombre']));
        ?>
    
    <?php 
    
    array_push($cate, $sub);
    }?>
       <?php 
       
       endforeach; 
       
       array_push($miarray, $cate);?>                         
     <?php endforeach; ?>
       
<?php

echo $this->Form->create('Producto',array('type'=>'file'));
echo $this->Form->input('clase_id',array('label' =>__('Clase producto')),array('options' => $clases));
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('precio',array('type' => 'text'),array('label' =>__('Precio')));
echo $this->Form->input('descripcion',array('type' => 'text'),array('label' =>__('Precio')));
?>                 
                  
<?php
echo $this->Form->input('subcategoria_id', array('value' => $subcategorias)); ?>
<?php echo $this->Form->input('colore_id',array('label' =>__('Color de boton')));

echo $this->Form->input('impresora_id',array('label' =>__('lugar de impreson')),array('options' => $impresoras));
echo $this->Form->input('estado',array('type' => 'hidden','value' => 1));
echo $this->Form->end('Guardar',array('button' =>__('Guardar')));

?>

</div>