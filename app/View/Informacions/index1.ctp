<div class="impresora">
	<h2><?php echo __('Informacion obligatoria') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'adicionarobl'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Pregunta') ?></th>
                        <th><?php echo __('cantidad de opciones') ?></th>
                         
                     
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
		</tr>
                
	<?php foreach ($informacions as $informacion): ?>
	<tr>
		
                <td><?php echo $informacion['informacions']['nombre']; ?> </td>
                
                <td><?php echo $informacion['informacions']['pregunta'];?> </td>
                <td><?php  echo $informacion['informacions']['numero_id'];?> </td> 
		
<td class="actions">
    
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit1', $informacion['informacions']['id']),array('class'=> 'btn btn-warning','escape'=>false)); 
?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete1', $informacion['informacions']['id']), 
array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $informacion['informacions']['nombre'])); 
?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
