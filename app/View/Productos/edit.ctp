<?php foreach ($ids as $id): ?>
<?php $id=$id['productos']['id']; ?>
<?php endforeach;?>

<?php foreach ($imgs as $img): ?>
<?php $img=$img['productos']['imagen']?>
<?php endforeach;?>

<div class="row">
  <div class="col-md-4">
<div class="productos form">
    <h2><?php echo __('Productos') ?></h2>
    
<div class=”actions”>
	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h2><?php echo __('Datos Editables') ?> </h2>
<?php
echo $this->Form->create('Producto',array('type'=>'file'));
echo $this->Form->input('clase_id',array('label' =>__('Clase producto')),array('options' => $clases));
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('precio',array('type' => 'text'),array('label' =>__('Precio')));
echo $this->Form->input('descripcion');
echo $this->Form->input('subcategoria_id',array('label' =>__('Subcategoria')));

      if($img==null){

        echo $this->Html->image('uploads/producto/imagen/'.'default.jpg', array('alt' => 'image','height'=>'100', 'width'=>'100')); 
      }
 else {
        echo $this->Html->image('uploads/producto/imagen/'.$this->data['Producto']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); 
  
}
        echo $this->Form->input('imagen',array('label' =>__('Imagen'),'type'=>'hidden'));
        echo $this->Form->input('imagen',array('type' =>__('file'),'label'=>'cambiar'));
        
        
echo $this->Form->input('colore_id',array('label' =>__('Color de boton')));

echo $this->Form->input('impresora_id',array('label' =>__('lugar de impreson')),array('options' => $impresoras));


echo $this->Form->end('Guardar');
?>
</div>
  </div>
    
    <div class="col-md-8">


                 
                <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-8">. 
                        <h4>  Adicionar informacion obligatoria </h4>
                        <div class="btn-group btn-group-justified">
                             
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
                  </div>
                    
                  </div>
                 </div>
                    
                <h4>Listar  informacion obligatoria  </h4>
                    
            <div class="panel panel-default">
                 <table class="table table-striped">
                        
                     <tr>
                         <th>Nombre</th>
                          <th>pregunta </th>
                          <th>Opciones </th>
                          <th>Eliminar</th>
                     </tr>
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
                                   <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'prodinfs','action' => 'eliminar',$ingrediente['informacions']['id'],$id), 
                                                                    array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $ingrediente['informacions']['nombre'])); ?></td>

                               </tr>
                               <tr>
                                   
                               </tr>
                            <?php endforeach; ?>
                        
                   </table>         
            </div>
                
</div>
    </div>
    </div>

        
        
        
        
     



