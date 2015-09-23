<div class="personals">
	<h2><?php echo __('Personal') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
                      
			<th><?php echo __('CI') ?></th>
                        <th><?php echo __('Pin') ?></th>
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Paterno') ?></th>
                        <th><?php echo __('Materno') ?></th>
                         
              
                     
                       <th><?php echo __('Cliente') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($personals as $personal): ?>
	<tr>
                
		<td><?php echo $personal['personals']['ci']; ?> </td>
                <td><?php echo $personal['personals']['pin']; ?> </td>
		<td><?php echo $personal['personals']['nombre']; ?> </td>
		<td><?php echo $personal['personals']['paterno']; ?> </td>
                <td><?php echo $personal['personals']['materno']; ?> </td>
                <?php //echo $personal['Role']['cargo'] ?> 
            
                
		
                <td class="actions" style="width: 10px;">
                    <?php if($personal['clientes']['personal_id']==''):?>
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-export"></span> ',array('action' => 'set_cliente', $personal['personals']['id']), 
                    array('class'=> 'btn btn-info btn-small','escape'=>false, "title"=>"Establecer como cliente"), sprintf('¿Está seguro de registrar como cliente?', $personal['personals']['nombre'])); ?>
                    <?php endif;?>
                </td>
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $personal['personals']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>    
</td> 
<td> 
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $personal['personals']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $personal['personals']['nombre'])); ?>
</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
