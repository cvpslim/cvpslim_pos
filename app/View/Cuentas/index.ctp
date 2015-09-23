<div class="cuentas">
	<h2><?php echo __('Cuentas') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Permisos / derechos del personal ') ?></th>
                      
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($cuentas as $cuenta): ?>
	<tr>
		
		<td><?php echo $cuenta['Cuenta']['monto_asignado']; ?> </td>
		
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $cuenta['Cuenta']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $cuenta['Cuenta']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $cuenta['Cuenta']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $cuenta['Cuenta']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





