<div class="impresora">
	<h2><?php echo __('Informacion adicional') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
        
       
        
        
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        
                   
                         <th><?php echo __('Precio') ?></th>
                        
                       
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
		</tr>
                
	<?php foreach ($guarns as $guarn): ?>
	<tr>
                <?Php if($guarn['Guarn']['informacions_id']==200){ ?>
                <td><?php echo $guarn['Guarn']['nombre']; ?> </td>
                <td><?php echo $guarn['Guarn']['precio']; ?> </td>
                
		
<td class="actions">
    
    

<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'Guarns','action' => 'edit',$guarn['Guarn']['id']),array('class'=> 'btn btn-warning','escape'=>false)); 
 ?> 
<td> <?php 
echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('controller'=>'Guarns','action' => 'delete',$guarn['Guarn']['id']), 
array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $guarn['Guarn']['id'])); 
 
?></td>
                <?php }?>
	</tr>
	<?php endforeach; ?>
	</table>
</div>

