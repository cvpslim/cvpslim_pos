<div class="Area_recepcion view">


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los area de recepcion') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $recepcion['Recepcion']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete',  $recepcion['Recepcion']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$recepcion['Recepcion']['id'])); ?>  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           
            
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('identificador') ?>: </b></font></em>  <?php echo $recepcion['Recepcion']['id']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('lugar') ?></b></font></em><?php echo $recepcion['Recepcion']['lugares']; ?></li>
          
    </ul>
    </div>
    
        </div>    
    
</div>



		