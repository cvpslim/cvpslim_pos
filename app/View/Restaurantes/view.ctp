<div class="Restaurant view">


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los Restaurant') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $restaurante['Restaurante']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $restaurante['Restaurante']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$restaurante['Restaurante']['id'])); ?>  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           
            
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>: </b></font></em>  <?php echo $restaurante['Restaurante']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono') ?>:</b></font></em><?php echo $restaurante['Restaurante']['telefono']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Direccion') ?>:</b></font></em><?php echo $restaurante['Restaurante']['direccion']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Ciudad') ?>:</b></font></em><?php echo $restaurante['Restaurante']['ciudad']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('NIT') ?>:</b></font></em><?php echo $restaurante['Restaurante']['NIT']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('AutorizacionNro') ?>:</b></font></em><?php echo $restaurante['Restaurante']['AutorizacionNro']; ?></li>
          
    </ul>
    </div>
    
        </div>    
    
</div>



		