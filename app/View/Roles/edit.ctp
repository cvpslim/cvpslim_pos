
<?php foreach ($ids as $id): ?>
<?php $id['roles']['id'];?>
<?php endforeach;?>
<div class="roles form">
    <h2><?php echo __('Cargos') ?></h2>
    <div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Role');
echo $this->Form->input('id');

echo $this->Form->input('cargo',array('label' =>__('Cargo')));
echo $this->Form->input('funciones',array('label' =>__('Funciones')));
//echo $this->Form->input('sueldo',array('type' => 'text'),array('label' =>__('Sueldo')));

echo $this->Form->end('Guardar');
?>
</div>

 <div class="row">
   
    

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
                            <input name="idroles" type="hidden" value="<?php echo $id['roles']['id']; ?>">
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
                        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'roles_derechos','action' => 'eliminar',$de['derechos']['id'],$id['roles']['id']), 
                                                         array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $de['derechos']['permisos'])); ?></td>
                       
                    </tr>
                            <?php endforeach; ?>
                        
                   </table>         
            </div>
</div>
    </div>
</div> 
    
    
</div> 