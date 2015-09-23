<div class="areas">
    <h2>  <?php echo __('Areas') ?>
        
        </h2>
    
   
  <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
       
         
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			 <th><?php echo __('Nombre') ?></th>
                        
                        <th><?php echo __('Mostar Principal') ?></th>
                        <th><?php echo __('Pedir nombre') ?></th>
                        <th><?php echo __('Impresora') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($areas as $area): ?>
                
	<tr>
          
            
	        <td><?php echo $area['Area']['nombre']; ?> </td>
                <td><?php echo $area['Area']['mostrar_principal']; ?> </td>
                <td><?php  echo $area['Area']['pedir_nombre']; ?> </td>
                <td><?php  echo $area['Imprime']['lugar']; ?> </td>
		
                
                
	
                
<td class="actions">
    
    
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $area['Area']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $area['Area']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar el area ?', $area['Area']['nombre'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>



