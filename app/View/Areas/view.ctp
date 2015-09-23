
<div class="area view">

<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Area   : ') ?><?php echo$area['areas']['nombre']; ?></b></font></div>
    <div class="panel-footer">
        <h2><?php echo __('Acciones') ?></h2>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $area['areas']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar</span> ',array('action' => 'delete', $area['areas']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $area['areas']['id'])); ?>  
         
        <div class="h3"><?php echo __('Descripcion') ?>:<?php echo $area['areas']['descripcion']; ?></div>
        <p><?php echo __('Tipo') ?>  : </b></font></em><?php echo$area['areas']['tipo']; ?></p>   
       
        
         <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="#">
                <span class="badge pull-right"><?php echo$area[0]['num_mesas']; ?></span>
                <?php echo __('Cantidad de mesas') ?>
              </a>
            </li>
          </ul>
            
            
            <di>
                <h3> Lista de mesas</h3>
                 <?php echo $this->Html->link('<span class=" glyphicon glyphicon-download-alt"> Crear  mesa </span> ', array('action' => 'add',$area['areas']['id'],'controller' => 'mesas'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                 <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Reset </span> ',array('controller'=>'Recets','action' => 'mesas',$area['areas']['id']), 
                                array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que quiere vaciar el Mesas ?', $area['areas']['id'])); ?>
                <table class="table table-striped">
                    <tr>
                       <th><?php echo __('Tipo') ?></th>
                        <th><?php echo __('Nro Sillas') ?></th>
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
                    </tr>
                    <?php foreach ($mesas as $mesa): ?>
                    <tr>
                        <td><?php echo $mesa['mesas']['tipo']; ?></td>
                        <td><?php echo $mesa['mesas']['nrosillas']; ?></td>
                        
                        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('controller'=>'mesas','action' => 'view', $mesa['mesas']['id'],$area['areas']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
                        <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'mesas','action' => 'edit', $mesa['mesas']['id'],$area['areas']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>


                        <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('controller'=>'mesas','action' => 'delete', $mesa['mesas']['id'],$area['areas']['id']), 
                                array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar el Ingrediente?', $mesa['mesas']['id'])); ?></td>

                    </tr>
                    <?php endforeach; ?>
                </table>
            </di>
    
        </div>    
    
</div>
    
   



