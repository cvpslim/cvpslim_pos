<div class="cuentas">
	<h2><?php echo __('Datos de la Factura') ?></h2>

    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Autorizacion Nro') ?></th>
                        <th><?php echo __('Fecha de inicio') ?></th>
                        <th><?php echo __('Fecha de limite') ?></th>
                        <th><?php echo __('Actividad Economica') ?></th>
                        <th><?php echo __('Llave') ?></th>
                        <th><?php echo __('Texto de gracias') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($datosfacturas as $datosfactura): ?>
	<tr>
		
		<td><?php echo $datosfactura['Datosfactura']['nroautorizacion']; ?> </td>
                <td><?php echo $datosfactura['Datosfactura']['fechainicio']; ?> </td>
                <td><?php echo $datosfactura['Datosfactura']['fechalimite']; ?> </td>
                <td><?php echo $datosfactura['Datosfactura']['actividadeconomica']; ?> </td>
                <td><?php echo $datosfactura['Datosfactura']['llave']; ?> </td>
                <td><?php echo $datosfactura['Datosfactura']['textogracias']; ?> </td>
                
		
<td class="actions">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $datosfactura['Datosfactura']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $datosfactura['Datosfactura']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $datosfactura['Datosfactura']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





