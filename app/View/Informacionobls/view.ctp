<div class="role view">


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de las iformacion obligatoria') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Atras </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $informacionobl['Informacionobl']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete',  $informacionobl['Informacionobl']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$informacionobl['Informacionobl']['id'])); ?>  
            
            
</div>        
<div class="row">
    <div class="col-xs-6">
        
        <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>:: </b></font></em>  <?php echo $informacionobl['Informacionobl']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Pregunta') ?>:</b></font></em><?php echo $informacionobl['Informacionobl']['pregunta']; ?></li>
        
      
    </ul>
    </div>
        
        
        
    </div>
  <div class="col-xs-6">
      <h3> Opciones </h3>
      <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Añadir Opciones </span> ', array('controller'=>'guarniciones','action' => 'add', $informacionobl['Informacionobl']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            
      <table class="table table-striped">
          <tr>
            <th><?php echo __('Opciones') ?></th>
            <th><?php echo __('Precio') ?></th>
            <th><?php echo __(' ') ?></th>
            
            

            <th><?php echo __('Editar ') ?></th>
            <th><?php echo __('Eliminar') ?></th>
          </tr>
        <?php foreach ($guarniciones as $guarnicione): ?>
        <tr>
                    
             
                    <td><?php echo $guarnicione['guarniciones']['nombre']; ?><td>
                     <td><?php echo $guarnicione['guarniciones']['precio']; ?><td>
                  
                         
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'Guarniciones','action' => 'edit', $guarnicione['guarniciones']['id'],$informacionobl['Informacionobl']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                    <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('controller'=>'Guarniciones','action' => 'delete',  $guarnicione['guarniciones']['id'],$informacionobl['Informacionobl']['id']), 
                            array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$guarnicione['guarniciones']['id'])); ?>  </td>
            
        
        </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>



		