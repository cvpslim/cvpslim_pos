<div class="cliente view">
 
<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los descuentos') ?> </b></font></div>

   <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $descuento['Descuento']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $descuento['Descuento']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $descuento['Descuento']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar</span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
            
        </ul>
    
</div> 
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Motivo ') ?>  : </b></font></em>  <?php echo $descuento['Descuento']['motivo']; ?></li>
       
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Descripcion') ?> : </b></font></em><?php echo $descuento['Descuento']['descripcion']; ?></li>
         
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Porcentaje') ?> :</b></font></em><?php echo $descuento['Descuento']['porcentaje']; ?></li>
          
     </ul>
    </div>
 
</div>
</div>




