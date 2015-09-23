<?php foreach ($ids as $id): ?>
<?php  $id['personals']['id'];?>
<?php $id['personals']['role_id'];?>
<?php endforeach;?>
<div class="personals form">
    <h2><?php echo __('Personal') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
     <h3><?php echo __('Datos Editables') ?></h3>
<?php


echo $this->Form->create('Personal');
echo $this->Form->input('id');
echo $this->Form->input('ci',array('type' => 'text'),array('label' =>__('CI')));
echo $this->Form->input('pin',array('type' => 'text'));
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('paterno',array('label' =>__('Paterno')));
echo $this->Form->input('materno',array('label' =>__('Materno')));
echo $this->Form->input('telefono1',array('type' => 'text'),array('label' =>__('Telefono1')));
echo $this->Form->input('telefono2',array('type' => 'text'),array('label' =>__('Telefono2')));
echo $this->Form->input('telefono3',array('type' => 'text'),array('label' =>__('Telefono3')));
echo $this->Form->input('direccion',array('label' =>__('Direccion')));
echo $this->Form->input('email1',array('label' =>__('Email1')));
echo $this->Form->input('email2',array('label' =>__('Email2')));
echo $this->Form->input('email3',array('label' =>__('Email3')));
echo $this->Form->input('fecha_nacimiento',array('label' =>__('Fecha de Nacimiento'),'minYear'=>date('Y')-80,'maxYear'=>date('Y')-14));
echo $this->Form->input('sueldo',array("type"=>"text"),array('label' =>__('Sueldo')));
//echo $this->Form->input('fecha_ingreso');
echo $this->Form->input('role_id', array('options' => $roles),array('label' =>__('Rol')));

echo $this->Form->end('Guardar');
?>
</div>

<div class="col-md-6">
       
            <div class="panel panel-default">
                 
                <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-8">
                        <h4>  Adicionar derechos personal  </h4>
                        <div class="btn-group btn-group-justified">
						
						
                             
             <div class="btn-group">
	
   <?php
                            echo $this->Form->create(null,array('url'=>array('controller'=>'DerechosPersonals','action'=>'agregar')));?>
                            <input name="idpersonal" type="hidden" value="<?php echo $id['personals']['id']; ?>">
                            <select name="derecho" id="derecho">
                                                            <?php foreach ($deres as $dere): ?>
                                                            <option value="<?php echo $dere['derechos']['id']; ?>" name="id">

                                                                <?php echo $dere['derechos']['permisos']; ?>

                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                        <?php echo $this->Form->end('Adicionar'); ?> 
                            
                       <?php echo $this->Html->link('<span class="glyphicon glyphicon-task">importar derechos</span> ',array('controller'=>'DerechosPersonals','action' => 'agregardir',$id['personals']['id'] ,$id['personals']['role_id']) ,array('class'=> 'btn btn-primary','escape'=>false)); ?> 

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
                     <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'DerechosPersonals','action' => 'eliminar',$id['personals']['id'] ,$deres1['derechos']['id']), 
                                                         array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $deres1['derechos']['permisos'])); ?></td>
                         </tr>
                              
                            <?php endforeach; ?>
                         
                               
                        
                   </table>         
            </div>
</div>
    </div>
</div> 
    
