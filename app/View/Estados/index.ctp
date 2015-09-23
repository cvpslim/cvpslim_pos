<div class="estados">
	<h2><?php echo __('Estados de preparacion') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Descripcion') ?></th>
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($estados as $estado): ?>
	<tr>
		
		<td><?php echo $estado['Estado']['descripcion']; ?> </td>
		
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view',$estado['Estado']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $estado['Estado']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $estado['Estado']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $estado['Estado']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




