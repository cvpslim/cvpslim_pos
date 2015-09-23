<div class="impresora">
	<h2><?php echo __('Informacion adicional') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('Guarns'=>'add','action' => 'add1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
        
       
        
        
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        
                   
                         <th><?php echo __('Precio') ?></th>
                        
                       
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
		</tr>
                <?php
                $var="";
                $var1="";
                ?>
                <?php $v=0;
                        $v1=0;
                        $v2=0;
                        $v3=0;
                        ?>
	<?php foreach ($informacions as $informacion): ?>
	<tr>
		
               
                
             
                
                <td><?php echo $informacion['tmp']['nombre']; ?> </td>
                <td><?php echo $informacion['tmp']['precio']; ?> </td>
                
		
<td class="actions">
    
    

<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'Guarns','action' => 'edit', $informacion['informacions']['id']),array('class'=> 'btn btn-warning','escape'=>false)); 
 ?> 
<td> <?php 
echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('controller'=>'Guarns','action' => 'delete', $informacion['informacions']['id']), 
array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $informacion['informacions']['id'])); 
 
?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>

