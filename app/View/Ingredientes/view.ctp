<div class="ingredientes">

<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los Ingredientes') ?></b></font></div>
    <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $ingrediente['Ingrediente']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $ingrediente['Ingrediente']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $ingrediente['Ingrediente']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
            
        </ul>

	
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>:</b></font></em> <?php echo $ingrediente['Ingrediente']['nombre']; ?></li>
   
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Precio') ?>:</b></font></em><?php echo $ingrediente['Ingrediente']['precio']; ?></li>
       

  </ul>
    </div>
    
</div>
</div>



