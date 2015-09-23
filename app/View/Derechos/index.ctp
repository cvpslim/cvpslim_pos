<div class="cuentas">
	<h2><?php echo __('Derechos') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Permisos ') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($derechos as $derecho): ?>
	<tr>
		<td><?php echo $derecho['Derecho']['permisos']; ?> </td>
		
		
<td class="actions">

<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $derecho['Derecho']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $derecho['Derecho']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $derecho['Derecho']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





