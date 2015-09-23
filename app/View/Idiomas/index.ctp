<div class="estados">
	<h2><?php echo __('Idioma') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Estandar') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($idiomas as $idioma): ?>
	<tr>
		
		<td><?php echo $idioma['Idioma']['nombre']; ?> </td>
                <td><?php echo $idioma['Idioma']['estandar']; ?> </td>
		
<td class="actions">

 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $idioma['Idioma']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $idioma['Idioma']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $idioma['Idioma']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>




