<div class="Producto view">
    
<div class="panel panel-default">
    
  
    <div class="panel-footer"> <font size="+1"><b>Detalle de los Producto </b></font></div>

        <div class="panel-footer">

               <ul>
                   <h3><?php echo __('Acciones') ?></h3>

                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $producto['Producto']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?> 
                   
                   
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar</span> ',array('action' => 'delete', $producto['Producto']['id']), 
               array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $producto['Subcategoria']['id'])); ?> 
                 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 

               </ul>
       </div>
       
<div class="row">
    <div class="col-md-6">
        
        <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b> <?php echo __('Nombre') ?> :</b></font></em>  <?php echo $producto['Producto']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Precio') ?>  :</b></font></em><?php echo$producto['Producto']['precio']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Descripcion') ?>  :</b></font></em><?php echo$producto['Producto']['descripcion']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Estacion Impresion') ?>  : </b></font></em><?php echo $producto['Impresora']['lugar']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b>subcategoria pertenciente :</b></font></em><?php echo $producto['Subcategoria']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><?php echo $this->Html->image('uploads/producto/imagen/'.$producto['Producto']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </li>     
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Imagen') ?>  : </b></font></em><?php echo $producto['Producto']['imagen']; ?></li>
      
     </ul>
    </div>
        
    </div>
   
       
            