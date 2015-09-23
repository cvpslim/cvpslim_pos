
<div class="productos">
    
	<h2><?php echo __('Productos') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                       <th><?php echo __('Imagen') ?></th>
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Precio') ?></th>
                        <th><?php echo __('Area Recepcion') ?></th>
                        <th><?php echo __('Color') ?></th>
                         <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($productos as $producto): ?>
	<tr>
            <td><?php echo $this->Html->image('uploads/producto/imagen/'.$producto['Producto']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </td>
		<td><?php echo $producto['categorias']['nombre']; ?> </td>
		<td><?php echo $producto['subcategorias']['precio']; ?> </td>
                <td><?php echo $producto['Producto']['area_repecion']; ?> </td>
                <td>
                <button style="background-color:<?php echo $producto['Colore']['codigo']; ?>"><?php echo $producto['Colore']['nombre']; ?></button>
                  
                </td>
		
	

<td class="actions">

<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $producto['Producto']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $producto['Producto']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $producto['Producto']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $producto['Producto']['id'])); ?></td>
	
        
        
        
        
        </tr>
	<?php endforeach; ?>
	</table>
</div>


