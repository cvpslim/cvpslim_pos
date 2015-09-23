<div class="role view">


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de las Informacion adicional') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $informacion['Informacion']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete',  $informacion['Informacion']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$informacion['Informacion']['id'])); ?>  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           
            
</div>
    
    
    <div class="row">
    <div class="col-xs-6">
        <ul>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>:: </b></font></em>  <?php echo $informacion['Informacion']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Pregunta') ?>:</b></font></em><?php echo $informacion['Informacion']['pregunta']; ?></li>
        
         
    </ul>
    </div>
        
         <div class="col-xs-6">
      <h3> Opciones </h3>
      
      <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Crear opciones </span> ', array('controller'=>'guarns','action' => 'add', $informacion['Informacion']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
      <table class="table table-striped">
          <tr>
            <th><?php echo __('Opciones') ?></th>
            <th><?php echo __('Precio') ?></th>
            <th><?php echo __(' ') ?></th>
            <th><?php echo __(' ') ?></th>
        

            <th><?php echo __('Editar ') ?></th>
            <th><?php echo __('Eliminar') ?></th>
          </tr>
        <?php foreach ($guarniciones as $guarnicione): ?>
        <tr>
                    
             
                    <td><?php echo $guarnicione['guarns']['nombre']; ?><td>
                     <td><?php echo $guarnicione['guarns']['precio']; ?><td>
                   
                         
                    <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'Guarns','action' => 'edit', $guarnicione['guarns']['id'],$informacion['Informacion']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                    </td>
                    
                    <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('controller'=>'Guarns','action' => 'delete',  $guarnicione['guarns']['id'],$informacion['Informacion']['id']), 
                            array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$guarnicione['guarns']['id'])); ?>  </td>
            
        
        </tr>
        <?php endforeach; ?>
      </table>
  </div> 
        
        
    
        </div>    
    
    
</div>



		