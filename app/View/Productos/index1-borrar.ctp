<div class="productos">
    
	<h2><?php echo __('Productos') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Productos'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Restaurar'), array('action' => 'restaurar'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
       
        <ul/>
        
</div>
         <div id="proceso">
                    
                </div> 
	<table class="table table-striped">
		<tr>
			
                       <th><?php echo __('Imagen') ?></th>
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Precio') ?></th>
                        <th><?php echo __('Estacion Impresion') ?></th>
                         <th><?php echo __('Subcategoria') ?></th>
                    
                        <th><?php echo __('Color de boton') ?></th>
                        <th><?php echo __('Color de fuente') ?></th>
                       
                          <th> <?php echo __('Activar/Desactivar') ?></th>
                         <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<!--<td><?php // echo $producto['Producto']['id']; ?> </td>-->
            
            <td><?php echo $this->Html->image('uploads/producto/imagen/'.$producto['Producto']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </td>

		<td><?php echo $producto['Producto']['nombre']; ?> </td>
               
                          
		<td><?php echo $producto['Producto']['precio']; ?> </td>
 <!--<td><?php// echo $producto['Producto']['stock']; ?> </td>-->
               
 <td><?php echo $producto['Area']['nombre']; ?> </td>
 
 
     <td><?php   echo $producto['Subcategoria']['nombre'];?> </td>
    
 
 <td>
                <button style="background-color:<?php echo $producto['Colore']['codigo']; ?>"><?php echo $producto['Colore']['nombre']; ?></button>
                  
                </td>
                
                <td>
                <button style="background-color:<?php echo $producto['Fuente']['codigo']; ?>"><?php echo $producto['Fuente']['nombre']; ?></button>
                  
                </td>
       
                  
         <?php //echo $producto['Producto']['id'];  ?>
                
 
                
 <td><input name="obligatorio" type="checkbox" <?php if($producto['Producto']['estado']==1) echo'checked'; ?> value="<?php echo $producto['Producto']['id']; ?>"  onchange="guardarEstado(this);"></td> 

         
<td class="actions">
   
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $producto['Producto']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $producto['Producto']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $producto['Producto']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $producto['Producto']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
