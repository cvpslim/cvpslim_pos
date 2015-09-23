<div class="Role">
	<h2><?php echo __('Cargos') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Cargo') ?></th>
<!--                        <th><?php //echo __('Sueldo') ?></th>-->
                         <th><?php echo __('Funciones ') ?></th>
                      
                      
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
		</tr>
	<?php foreach ($roles as $role): ?>
	<tr>
		
		<td><?php echo $role['Role']['cargo']; ?> </td>
                <td><?php echo $role['Role']['funciones']; ?> </td>
<!--		<td><?php //echo $role['Role']['sueldo']; ?> </td>-->
		
<td class="actions">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $role['Role']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $role['Role']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $role['Role']['cargo'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>

