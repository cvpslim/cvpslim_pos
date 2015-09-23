<div class="estado view">
<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los Estados de preparacion') ?></b></font></div>
    <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $estado['Estado']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $estado['Estado']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $estado['Estado']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
            
        </ul>

	
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Descripcion') ?>:</b></font></em> <?php echo $estado['Estado']['descripcion']; ?></li>
          
        </ul>
    </div>

</div>



		