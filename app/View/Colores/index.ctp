<div class="cuentas">
	<h2><?php echo __('Colores') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('nombre') ?></th>
                        <th><?php echo __('codigo') ?></th>
                       
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($colores as $colore): ?>
	<tr>
		
		<td><?php echo $colore['Colore']['nombre']; ?> </td>
                <td><?php echo $colore['Colore']['codigo']; ?> </td>
		
<td class="actions">

<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $colore['Colore']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $colore['Colore']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $colore['Colore']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





