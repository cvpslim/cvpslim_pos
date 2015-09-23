
<div class="area view">
  
<h2>Area</h2>

<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b>Detalle de los Area </b></font></div>
    <div class="panel-footer">
        
     
            <h2>Acciones</h2>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $area['area']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $area['area']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $area['area']['id'])); ?>  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ir a lista </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            <?php echo $this->Html->link('<span class=" glyphicon glyphicon-download-alt"> Añadir mesa </span> ', array('action' => 'add',$area['area']['id'],'controller' => 'mesas'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b>ID_AREA  : </b></font></em>  <?php echo $area['area']['id']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b>Descripcion  : </b></font></em><?php echo $area['area']['descripcion']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b>Tipo   :</b></font></em><?php echo$area['area']['tipo']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b>Nombre  :</b></font></em><?php echo$area['area']['nombre']; ?></li>
          
    </ul>
    </div>
    
        </div>    
    
</div>




		
