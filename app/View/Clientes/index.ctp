<div class="clientes">
       <h2><?php echo __('Clientes') ?></h2>
  <div class="actions">
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar todo </span> ',array('controller'=>'recets','action'=>'clientes'), 
         array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de vaciar los clientes ?')); ?>
     <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
		
                        <th><?php echo __('Nit') ?></th>
                        <th><?php echo __('Nombre cliente') ?></th>
                         
                         <th><?php echo __('Razon Social') ?></th>
<!--                          <th><?php //echo __('Direccion') ?></th>
                           <th><?php //echo __('Telefono 1 ') ?></th>
                           <th><?php //echo __('Telefono 2 ') ?></th>
                           <th><?php //echo __('Telefono 3 ') ?></th>
                           <th><?php //echo __('email 1 ') ?></th>
                           <th><?php //echo __('email 2') ?></th>
                           <th><?php //echo __('email 3 ') ?></th>-->
                        <th><?php echo __('Tipo Cliente') ?></th>
                         <th><?php echo __('Descuento') ?></th>
                         <th><?php echo __('Credito') ?></th>
                        
                        <th><?php echo __('Ver') ?> </th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($clientes as $cliente): 
            ?>
                
	<tr>
		
		<td><?php echo $cliente['Cliente']['nit']; ?> </td>
		<td><?php echo $cliente['Cliente']['nombre'].' '.$cliente['Cliente']['apellido']; ?> </td>
                
                <td><?php echo $cliente['Cliente']['razon_social']; ?> </td>
<!--                <td><?php //echo $cliente['Cliente']['direccion']; ?> </td>
                <td><?php //echo $cliente['Cliente']['Telefono1']; ?> </td>
                <td><?php //echo $cliente['Cliente']['telefono2']; ?> </td>
                <td><?php //echo $cliente['Cliente']['telefono3']; ?> </td>
                <td><?php //echo $cliente['Cliente']['email1']; ?> </td>
                <td><?php //echo $cliente['Cliente']['email2']; ?> </td>
                <td><?php //echo $cliente['Cliente']['email3']; ?> </td>-->
               
		<td><?php echo $cliente['Cliente']['tipo']; ?> </td>
                <td><?php echo $cliente['Cliente']['porcentaje_descuento']; ?> </td>
                <td><?php echo $cliente['Cliente']['credito']; ?> </td>

<td class="actions">

<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> ',array('action' => 'view', $cliente['Cliente']['id']),array('class'=> 'btn btn-success','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $cliente['Cliente']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('EstÃ¡ seguro de que desea eliminar %s?', $cliente['Cliente']['nombre'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>



