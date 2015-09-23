<div class="categorias">
	<h2><?php echo __('Categorias') ?></h2>
 <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>    
   </div>
         <div id="proceso">
                    
                </div> 
        
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                       
                        <th><?php echo __('Descripcion') ?></th>
                         <th><?php echo __('Color de boton') ?> </th>
                         
                         <th><?php echo __('Activar') ?> </th>
                         <th><?php echo __('Crear producto') ?> </th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar') ?> </th>
                        
		</tr>
	<?php foreach ($categorias as $categoria): ?>
	<tr>
               <td><?php if($categoria['Categoria']['id']!=1){echo $categoria['Categoria']['nombre'];} ?> </td>
		<td><?php if($categoria['Categoria']['id']!=1){ echo $categoria['Categoria']['descripcion'];} ?> </td>
                <?php if($categoria['Categoria']['id']!=1){?>
                <td>
                <button style="background-color:<?php echo $categoria['Colore']['codigo']; ?>"><font color=<?php echo $categoria['Colore']['codfuente']; ?>><?php echo $categoria['Colore']['fuente']; ?></font></button>
                </td>

	<td><input name="obligatorio" type="checkbox" <?php if($categoria['Categoria']['estado']==1) echo'checked'; ?> value="<?php echo $categoria['Categoria']['id']; ?>"  onchange="guardarcat(this);"></td> 

<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ',array('controller'=>'productos','action' => 'concategoria',2),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $categoria['Categoria']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $categoria['Categoria']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $categoria['Categoria']['nombre'])); ?></td>
                <?php }?>
        </tr>
	<?php endforeach; ?>
	</table>
 </div>
