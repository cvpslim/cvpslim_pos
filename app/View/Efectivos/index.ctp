<div class="mesas">
	<h2><?php echo __('Efectivo') ?></h2>
        
 <div class="actions">
	
    <ul>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			 <th><?php echo __('cambio') ?></th>
                      
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
                
               

	<?php foreach ($efectivos as $efectivo): ?>
	<tr>
		
		<td><?php echo $efectivo['Efectivo']['cambio']; ?> </td>
		
              

<td class="actions">
    
  <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $efectivo['Efectivo']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $efectivo['Efectivo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




        
 