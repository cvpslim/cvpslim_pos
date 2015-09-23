<div class="estados">
	<h2><?php echo __('Tipos de Cambios') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Moneda') ?></th>
                     
                        <th><?php echo __('Valor de cotizacion') ?></th>
                        
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($tiposcambios as $tiposcambio): ?>
	<tr>
		
		<td><?php echo $tiposcambio['Moneda1']['moneda']; ?> </td>
               
                <td><?php echo $tiposcambio['TipoCambio']['valor']; ?> </td>
                
		
<td class="actions">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $tiposcambio['TipoCambio']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $tiposcambio['TipoCambio']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $tiposcambio['Moneda1']['moneda'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




