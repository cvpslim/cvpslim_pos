<div class="role view">


<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de los Cargos') ?></b></font></div>
    <div class="panel-footer">
        
     
            <h2><?php echo __('Acciones') ?></h2>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $role['Role']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar</span> ',array('action' => 'delete',  $role['Role']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',$role['Role']['id'])); ?>  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
           
            
</div>
   <div class="row">
    <div class="col-md-6">
        
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Cargo') ?>: </b></font></em>  <?php echo $role['Role']['cargo']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Funciones') ?>: </b></font></em>  <?php echo $role['Role']['funciones']; ?></li>
<!--          <li class="list-group-item"><em ><font size="+0,5"><b><?php //echo __('Sueldo') ?></b></font></em><?php //echo $role['Role']['sueldo']; ?></li>-->
          
    </ul>
    </div>
    
        </div>    
    

    <div class="col-md-6">
       
            <div class="panel panel-default">
                 
                <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-8">. 
                        <h4> . Adicionar Derechos  </h4>
                        <div class="btn-group btn-group-justified">
                             
             <div class="btn-group">
                        <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'roles_derechos','action'=>'agregar')));?>
                            <input name="idroles" type="hidden" value="<?php echo $role['Role']['id']; ?>">
                            <select name="derecho" id="derecho">
                                                            <?php foreach ($deres as $dere): ?>
                                                            <option value="<?php echo $dere['derechos']['id']; ?>" name="id">

                                                                <?php echo $dere['derechos']['permisos']; ?>

                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                        <?php echo $this->Form->end('Adicionar'); ?>  
             </div>
                  </div>
                    
                  </div>
                 </div>
                    
                <h4>Listar derechos  </h4>
                    
            <div class="panel panel-default">
                 <table class="table table-striped">
                        
                            <?php foreach ($des as $de): ?>
                     <tr>
                        <td><?php echo $de['derechos']['permisos']; ?></td>
                        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'roles_derechos','action' => 'eliminar',$de['derechos']['id'],$role['Role']['id']), 
                                                         array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $de['derechos']['permisos'])); ?></td>
                       
                    </tr>
                            <?php endforeach; ?>
                        
                   </table>         
            </div>
</div>
    </div>
</div> 
    
    
</div>    
</div>

</div>


		