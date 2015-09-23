<div class="cuentas">
	<h2><?php echo __('Tipo de billetes utilados y cuantos ') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('cantidad  ') ?></th>
                      
                        <th><?php echo __('tipo de cambio ') ?></th>
                        
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($billetes as $billete): ?>
	<tr>
		
		<td><?php echo $billete['Tipodebillete']['cantidad']; ?> </td>
                <td><?php echo $billete['Tipodebillete']['tipo_cambio_id']; ?> </td>
		
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $billete['Tipodebillete']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $billete['Tipodebillete']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





