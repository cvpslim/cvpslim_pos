<div class="personal view">
    

<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b>Detalle de los Personal </b></font></div>

        <div class="panel-footer">

                <ul>
                    <h3><?php echo __('Acciones') ?></h3>

                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $personal['Personal']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?> 
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $personal['Personal']['id']), 
                     array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $personal['Personal']['id'])); ?> 
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>  
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Crear derechos </span> ', array('controller'=>'derechos','action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            

			   <?php //echo $this->Html->link('<span class="glyphicon glyphicon-task"> agregar derechos</span> ',array('controller'=>'DerechosPersonals','action' => 'agregardir',$personal['Personal']['id'],  $personal['Personal']['role_id']) ,array('class'=> 'btn btn-primary','escape'=>false)); ?> 	
				
				</ul>
 		 

                      
        </div>
    
<div class="row">
    <div class="col-md-6">
        
    <div class="panel-body">
     <ul class="list-group">
          
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('CI') ?>: </b></font></em><?php echo $personal['Personal']['ci']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('PIN') ?> :</b></font></em> <?php echo$personal['Personal']['pin']; ?></li>          
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?> : </b></font></em><?php echo$personal['Personal']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Paterno') ?> : </b></font></em><?php echo$personal['Personal']['paterno']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Materno') ?> :</b></font></em><?php echo $personal['Personal']['materno']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono1') ?>  :</b></font></em><?php echo$personal['Personal']['telefono1']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono2') ?>  :</b></font></em><?php echo$personal['Personal']['telefono2']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono3') ?>  :</b></font></em><?php echo$personal['Personal']['telefono3']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Direccion') ?> :</b></font></em> <?php echo$personal['Personal']['direccion']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Email1') ?>  :</b></font></em><?php echo$personal['Personal']['email1']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Email2') ?>  :</b></font></em><?php echo$personal['Personal']['email2']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Email3') ?>  :</b></font></em><?php echo$personal['Personal']['email3']; ?></li>
<li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Fecha de Nacimiento') ?> :</b></font></em> <?php echo$personal['Personal']['fecha_nacimiento']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('cargo') ?> :</b></font></em> <?php echo $personal['Role']['cargo']; ?></li>
           
  <?php   $rol=$personal['Personal']['role_id'];?>  
     </ul>
    </div>
        
    </div>

    
<div class="col-md-6">
       
            <div class="panel panel-default">
                 
                <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-8">. 
                        <h4> . Adicionar derechos personal  </h4>
                        <div class="btn-group btn-group-justified">
						
						
                             
             <div class="btn-group">
	
   <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'DerechosPersonals','action'=>'agregar')));?>
                            <input name="idpersonal" type="hidden" value="<?php echo $personal['Personal']['id']; ?>">
                            <select name="derecho" id="derecho">
                                                            <?php foreach ($deres as $dere): ?>
                                                            <option value="<?php echo $dere['derechos']['id']; ?>" name="id">

                                                                <?php echo $dere['derechos']['permisos']; ?>

                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                        <?php echo $this->Form->end('Adicionar'); ?> 
                            
                       <?php echo $this->Html->link('<span class="glyphicon glyphicon-task">importar derechos</span> ',array('controller'=>'DerechosPersonals','action' => 'agregardir',$personal['Personal']['id'],  $personal['Personal']['role_id']) ,array('class'=> 'btn btn-primary','escape'=>false)); ?> 
                       
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reset derechos para editar </span> ', array('controller'=>'recets','action' => 'personal',$personal['Personal']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
            			     
                            
             
	 
                          


  </div>
                  </div>
                    
                  </div>
                 </div>
                    
                <h4>Listar derechos  </h4>
                    
            <div class="panel panel-default">
                 <table class="table table-striped">
                        
                           
                    
                  <?php foreach ($deres1 as $deres1): 
                          ?>
                    
                     <tr> 
                      <td> <?php echo $deres1['derechos']['permisos']; ?>  </td> 
                     <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'DerechosPersonals','action' => 'eliminar',$idpersonal,$deres1['derechos']['id']), 
                                                         array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $deres1['derechos']['permisos'])); ?></td>
                         </tr>
                              
                            <?php endforeach; ?>
                         
                               
                               
                         
            
                                    
                         
                         
                         
                         
                               
                        
                   </table>         
            </div>
</div>
    </div>
</div> 
    
    
</div>    
</div>


