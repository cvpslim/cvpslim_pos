<div class="cuentas">
	<h2><?php echo __('ANULACIONES') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                     
                        <th><?php echo __('Motivo') ?></th>
                          <th><?php echo __('Descripcion') ?></th>
                      
                      
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($anulacions as $anulacion): ?>
	<tr>
		
		<td><?php echo $anulacion['Anulacion']['motivo']; ?> </td>
                <td><?php echo $anulacion['Anulacion']['texto libre']; ?> </td>
              
		
<td class="actions">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit',$anulacion['Anulacion']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $anulacion['Anulacion']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $anulacion['Anulacion']['motivo'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
        
        
</div>




