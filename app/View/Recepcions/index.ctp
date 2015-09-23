<div class="Role">
	<h2><?php echo __('Area de recepcion') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('identificador') ?></th>
                        <th><?php echo __('lugar') ?></th>
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
		</tr>
	<?php foreach ($recepcions as $recepcion): ?>
	<tr>
		<td><?php echo $recepcion['Recepcion']['id']; ?> </td>
		<td><?php echo $recepcion['Recepcion']['lugares']; ?> </td>
		
		
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $recepcion['Recepcion']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $recepcion['Recepcion']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $recepcion['Recepcion']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $recepcion['Recepcion']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>

