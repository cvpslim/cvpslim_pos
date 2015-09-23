<div class="subcategoria view">
    
<div class="panel panel-primary">
    
   <div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de las SubCategorias') ?></b></font></div>
    <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $Subcategoria['Subcategoria']['id'],$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $Subcategoria['Subcategoria']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $Subcategoria['Subcategoria']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index',$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           

         <?php echo $this->Html->link('<span class=" glyphicon glyphicon-download-alt"> Añadir Producto </span> ', array('action' => 'add',$Subcategoria['Subcategoria']['id'],'controller' => 'productos'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Listar Producto </span> ',array('controller'=>'Productos','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            
        </ul>

	
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>:</b></font></em> <?php echo $Subcategoria['Subcategoria']['nombre']; ?></li>     
        <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Descripcion') ?>:</b></font></em><?php echo $Subcategoria['Subcategoria']['descripcion'];?></li>
         <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Categoria') ?> :</b></font></em> <?php echo$Subcategoria['Categoria']['nombre']; ?></li>
         <li class="list-group-item"><em ><font size="+0,5"><?php echo $this->Html->image('uploads/subcategoria/imagen/'.$Subcategoria['Subcategoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </li>      
         <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Imagen') ?>:</b></font></em><?php echo $Subcategoria['Subcategoria']['imagen']; ?></li>        
         
     </ul>
    </div>

    </div>
</div>
</div>

    
    


		