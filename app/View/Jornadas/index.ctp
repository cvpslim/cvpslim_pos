<div class="cuentas">
	<h2><?php echo __('Jornadas') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Iniciar'), array('action' => 'iniciar'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
       
   
        <ul/>
        
</div>
    
    
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Hora Inicio') ?></th>
                        <th><?php echo __('Fecha Inicio') ?></th>
                        <th><?php echo __('Monto Inicial') ?></th>
                        <th><?php echo __('Usuario Inicio') ?> </th>
                        <th><?php echo __('Hora Cierre') ?></th>
                        <th><?php echo __('Fecha Cierre') ?></th>
                        <th><?php echo __('Monto Cierre') ?></th>
                        <th><?php echo __('Usuario Cierre') ?> </th>
		</tr>
	<?php foreach ($jornadas as $jornada): ?>
	<tr>
		
		<td><?php echo $jornada['Jornada']['hora_inicio']; ?> </td>
                <td><?php echo $jornada['Jornada']['fecha_inicio']; ?> </td>
                <td><?php echo $jornada['Jornada']['monto_inicial']; ?> </td>
                <td><?php echo $jornada['Jornada']['usuario_inicio']; ?> </td>
                
                <td><?php echo $jornada['Jornada']['hora_cierre']; ?> </td>
                <td><?php echo $jornada['Jornada']['fecha_cierre']; ?> </td>
                <td><?php echo $jornada['Jornada']['monto_cierre']; ?> </td>
                <td><?php echo $jornada['Jornada']['usuario_cierre']; ?> </td>
                
                <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Cierre'), array('action' => 'cierre',$jornada['Jornada']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
             
		
<td class="actions">

 <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $jornada['Jornada']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $jornada['Jornada']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	</table>
</div>





