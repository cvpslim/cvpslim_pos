
 <?php foreach ($idpros as $idpro): ?>
<?php $id_cat= $idpro['categorias']['id'];?>
 <?php endforeach; ?>
<h3> Informacion obligatoria para el  producto</h3>

<div class="panel-body">
     <ul class="list-group">
         
         <h2> Informacion Adicional</h2>
         
         <div class="btn-group btn-group-justified">
                  
                <div class="btn-group">
                        <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'catinfs','action'=>'agregar')));?>
                            <input name="idcategoria" type="hidden" value="<?php echo $id_cat; ?>">
                            <select name="informacion" id="informacion">
                                                            <?php foreach ($cats as $act): ?>
                                                            <option value="<?php echo $act['adicionalguarns']['id']; ?>" name="id">

                                                                     <?php echo $act['adicionalguarns']['nombre']; ?>

                                                            </option>
                                                            <?php endforeach; ?>
                             </select>
                        <?php echo $this->Form->end('Adicionar'); ?>  
                </div>
                  </div>
         <div class="panel-body">
                    
                   <h4>Listar  informacion adicional </h4>
                    
                    <div class="panel panel-default">
                         <table class="table table-striped">

                             <tr>
                                 <th>Nombre</th>
                                  <th>precio </th>
                             </tr>
                             
                             <?php $var="lalalal";?>
                            <?php $conf="lalalal";?>
                                    <?php foreach ($ingredientes as $ingrediente): ?>
                                        <tr>
                                           <td><?php echo $ingrediente['adicionalguarns']['nombre'];?></td>
                                           <td><?php echo $ingrediente['adicionalguarns']['precio'];?></td>
                                           
             
                                       </tr>
                                       <tr>

                                       </tr>
                                    <?php endforeach; ?>

                           </table>         
                    </div>

 </ul>
    </div>
       

<div><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Finalizar'), array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
 </div>  
