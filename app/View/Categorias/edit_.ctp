
<?php foreach ($id as $id): ?>
<?php $id=$id['categorias']['id']?>
<?php endforeach;?>
<div class="Categorias form">
    <h2><?php echo __('Categoria') ?></h2>
<div class=”actions”>
	
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás</span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
      <h3><?php echo __('Datos Editables') ?></h3>
<?php

        echo $this->Form->create('Categoria',array('type'=>'file'));
        echo $this->Form->input('id');
        echo $this->Form->input('nombre',array('label' =>__('Nombre')));
        echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
        
        echo $this->Form->input('colore_id',array('label' =>__('Color Button')),array('options' => $colores));
        echo $this->Form->input('fuente_id');
         echo $this->Form->end('Guardar');
       
?>
</div>

<div class="panel-body">
     <ul class="list-group">
         
         <h2> Modificadores </h2>
         
         <div class="btn-group btn-group-justified">
                  
                <div class="btn-group">
                        <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'catinfs','action'=>'agregar')));?>
                            <input name="idcategoria" type="hidden" value="<?php echo $id; ?>">
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
                    
                   <h4>Listar  Modificadores </h4>
                    
                    <div class="panel panel-default">
                         <table class="table table-striped">

                             <tr>
                                 <th>Nombre</th>
                                  <th>precio </th>
                                 
                                  <th>Eliminar</th>
                             </tr>
                             
                             <?php $var="lalalal";?>
                            <?php $conf="lalalal";?>
                                    <?php foreach ($ingredientes as $ingrediente): ?>
                                        <tr>
                                           <td><?php echo $ingrediente['adicionalguarns']['nombre'];?></td>
                                           <td><?php echo $ingrediente['adicionalguarns']['precio'];?></td>
                                           
                                   <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'catinfs','action' => 'eliminar',$ingrediente['adicionalguarns']['id'],$id), 
                                                                    array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $ingrediente['adicionalguarns']['nombre'])); ?></td>

                                       </tr>
                                       <tr>

                                       </tr>
                                    <?php endforeach; ?>

                           </table>         
                    </div>

 </ul>
    </div>


    </div>
