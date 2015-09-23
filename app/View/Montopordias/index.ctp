<div class="mesas">
	<h2><?php echo __('Monto') ?></h2>
        
 <div class="actions">
	
    <ul>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			 <th><?php echo __('cantidad') ?></th>
                         <th><?php echo __('De que moneda fue') ?></th>
                      
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
                
               

	<?php foreach ($cantidads as $cantidad): ?>
	<tr>
		
		<td><?php echo $cantidad['Montopordia']['cantidad']; ?> </td>
                <td><?php echo $cantidad['Efectivo']['cambio']; ?> </td>
		
              

<td class="actions">
    
  <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete',  $cantidad['Montopordia']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?',  $cantidad['Montopordia']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




        
 