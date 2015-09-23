<div class="subcategoria view">

   <div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('SubCategorias : ') ?><?php echo $Subcategoria['Subcategoria']['nombre']; ?></b></font></div>
    <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit1', $Subcategoria['Subcategoria']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar</span> ',array('action' => 'delete', $Subcategoria['Subcategoria']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $Subcategoria['Subcategoria']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
     
        </ul>
        
     <div class="h3"><li><?php echo __('Descripcion') ?>:  </b></font></em><?php echo $Subcategoria['Subcategoria']['descripcion'];?>
         </li></div>
        
        <table class="table table-striped">
         <tr>
             <td><font size="+0,5"><b><?php echo __('Color de boton') ?> :  </b></font></em> <button style="background-color:<?php echo $Subcategoria['Colore']['codigo']; ?>"><?php echo $Subcategoria['Colore']['nombre']; ?></button></td>
             <td><font size="+0,5"><b><?php echo __(' Color de fuente ') ?> :  </b></font></em> <button style="background-color:<?php echo $Subcategoria['Fuente']['codigo']; ?>"><?php echo $Subcategoria['Fuente']['nombre']; ?></button>
                 </td>
                 <td>        
                            <td><font size="+0,5"><b><?php echo __('Imagen') ?> :  </b></font> <?php echo $this->Html->image('uploads/subcategoria/imagen/'.$Subcategoria['Subcategoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?>
</td>
         </tr>
     </table>

	
</div>
 
        <div class="panel-body">
            <h3> Productos </h3>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('controller'=>'productos','action' => 'add',$Subcategoria['Subcategoria']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	  
          
    </div>
    </div>
        
             

    </div>



    
    


		