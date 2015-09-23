<div class="mesas">
	<h2><?php echo __('Mesas') ?></h2>
        
 <div class="actions">
	
    <ul>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('controller' => 'areas','action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add',$id_area),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			 <th><?php echo __('Numero de Sillas') ?></th>
                        <th><?php echo __('Tipo') ?></th>
                        
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
                
               

	<?php foreach ($mesas as $mesa): ?>
	<tr>
		
		<td><?php echo $mesa['Mesa']['nrosillas']; ?> </td>
		<td><?php echo $mesa['Mesa']['tipo']; ?> </td>
              

<td class="actions">
    
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $mesa['Mesa']['id'],$id_area),array('class'=> 'btn btn-primary','escape'=>false)); ?>
    <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $mesa['Mesa']['id'],$id_area),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
    <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $mesa['Mesa']['id'],$id_area), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $mesa['Mesa']['id'],$id_area)); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




        
 