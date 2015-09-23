<div class="clientes">
    <h2>  <?php echo __('Descuentos') ?>
        
        </h2>
  <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
		
                        <th><?php echo __('Motivo') ?></th>
                      
                         <th><?php echo __('Descripcion') ?></th>
                        <th><?php echo __('Porcentaje') ?></th>
                        
                         
                        
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($descuentos as $descuento): ?>
	<tr>
		
		<td><?php echo $descuento['Descuento']['motivo']; ?> </td>
		
                <td><?php echo $descuento['Descuento']['descripcion']; ?> </td>
                <td><?php echo $descuento['Descuento']['porcentaje']; ?> </td>
       

<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $descuento['Descuento']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
 <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $descuento['Descuento']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar %s?', $descuento['Descuento']['motivo'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>



