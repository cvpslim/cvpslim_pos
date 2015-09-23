<div class="categorias">
    <h2>  <?php echo __('subcategorias') ?> </h2>
    <div class=”actions”>
	
	<ul>
                 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Atras </span> ', array('action' => 'view',$categorias['categorias']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
    </div>
    <table class="table table-striped">
		<tr> 
                          <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Imagen') ?></th>
                        <th><?php echo __('Descripcion') ?></th>
                        
                         <th><?php echo __('Vista') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
      <?php foreach ($categorias as $categoria): ?>
                        
        
	<tr>
		
		<td><?php echo $categoria['subcategorias']['nombre']; ?> </td>
		<td><?php echo $this->Html->image('uploads/subcategoria/imagen/'.$categoria['subcategorias']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </td>
                <td><?php //echo $categoria['subcategorias']['descripcion']; ?> </td>
                <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('controller' => 'subcategorias','action' => 'view', $categoria['subcategorias']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
                <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller' => 'subcategorias','action' => 'edit', $categoria['subcategorias']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>


                <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller' => 'subcategorias','action' => 'delete', $categoria['subcategorias']['id']), 
                        
                      array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar el Ingrediente?', $categoria['subcategorias']['id'])); ?></td>

        
        
   
              
        
  
        </tr>
       <?php endforeach; ?>
	</table>
</div>


  
