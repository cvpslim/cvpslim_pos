<div class="mesa view"> 


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de las Mesas') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
             <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('controller'=>'areas','action' => 'view',$id_area),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit',  $mesa['Mesa']['id'],$id_area),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar </span> ',array('action' => 'delete',$mesa['Mesa']['id'],$id_area),array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $mesa['Mesa']['id'])); ?>  
          
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Numero de Sillas') ?>  : </b></font></em>  <?php echo $mesa['Mesa']['nrosillas']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Tipo') ?>  :  </b></font></em><?php echo $mesa['Mesa']['tipo']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Mesa') ?> : </b></font></em><?php echo $mesa['Mesa']['area_id']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Area de Ubicacion') ?> : </b></font></em><?php echo $mesa['Area']['descripcion']; ?></li>
          
    </ul>
    </div>
    
        </div>    
    
</div>





