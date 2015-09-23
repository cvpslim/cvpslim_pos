<div class="areas">
    <h2>  <?php echo __('Mesas del Area') ?> 
        </h2>
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('controller' => 'mesas','action' => 'index', $mesas['mesas']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	<table class="table table-striped">
		<tr> 
                        <th><?php echo __('Nrosillas') ?></th>
                        <th><?php echo __('Tipo') ?></th>
                        <th><?php echo __('Vista') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
                        
                       
		</tr>
           <?php foreach($areas as $area): ?>     
	<tr>
                <td><?php echo $area['mesas']['nrosillas']; ?> </td>
                <td><?php echo $area['mesas']['tipo']; ?> </td>
               
     
                <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('controller' => 'mesas','action' => 'view', $area['mesas']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
                <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller' => 'mesas','action' => 'edit', $area['mesas']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>


                <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller' => 'mesas','action' => 'delete', $area['mesas']['id']), 
                      array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar el Ingrediente?', $area['mesas']['id'])); ?></td>

        
        
        
        
        
        
        </tr>
       <?php endforeach; ?>
	</table>
</div>


  
