
<div class="ingredientes">
    <h2>
        <?php echo __('Informacion obligatoria') ?>
    </h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('CrearNuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                   
                        <th><?php echo __('Nombre') ?></th>
                   
                         <th><?php echo __('Precio') ?></th>                  
                         
                         <th>    <?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
</tr>
	
<?php foreach ($ingredientes as $ingrediente): ?>
	<tr>
		<td><?php echo $ingrediente['Ingrediente']['nombre']; ?> </td>
		
                <td><?php echo $ingrediente['Ingrediente']['precio']; ?> </td>
                


<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $ingrediente['Ingrediente']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $ingrediente['Ingrediente']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $ingrediente['Ingrediente']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $ingrediente['Ingrediente']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
        </div>

