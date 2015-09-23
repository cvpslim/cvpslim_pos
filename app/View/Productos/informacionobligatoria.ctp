
 <?php foreach ($idpros as $idpro): ?>
<?php $id= $idpro['productos']['id'];?>
 <?php endforeach; ?>
<h3> Informacion obligatoria para el  producto</h3>

<div class="btn-group">
                        <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'Prodinfs','action'=>'agregar')));?>
                            <input name="idproducto" type="hidden" value="<?php echo $id; ?>">
                            <select name="informacion" id="informacion">
                                                            <?php foreach ($ingreds as $ingred): ?>
                                                            <option value="<?php echo $ingred['informacions']['id']; ?>" name="id">

                                                                     <?php echo $ingred['informacions']['nombre']; ?>

                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                        <?php echo $this->Form->end('Adicionar'); ?>  
  </div>



 <div class="panel panel-default">
                 <table class="table table-striped">
                        
                     <tr>
                         <th>Nombre</th>
                          <th>pregunta </th>
                          <th>Opciones</th>
                         
                     <?php $var="lalalal";?>
                     <?php $conf="lalalal";?>
                            <?php foreach ($ingredientes as $ingrediente): ?>
                                <tr>
                                   <td><?php 
                                                if($ingrediente['informacions']['nombre']!=$var){
                                                   echo $ingrediente['informacions']['nombre'];
                                                   $var=$ingrediente['informacions']['nombre'];
                                                      }?></td>
                                   
                                   
                                   <td><?php 
                                    if($ingrediente['informacions']['pregunta']!=$conf)
                                      echo $ingrediente['informacions']['pregunta']; 
                                      $conf=$ingrediente['informacions']['pregunta'];
                                    ?></td>
                                   <td><?php echo $ingrediente ['guarns']['nombre']; ?></td>
                                  
                               </tr>
                               <tr>
                                   
                               </tr>
                            <?php endforeach; ?>
                        
                   </table>         
            </div>
                

   
       

<div><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Finalizar'), array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
 </div>  
