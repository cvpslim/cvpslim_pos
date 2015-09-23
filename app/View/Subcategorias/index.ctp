<div class="subcategoria">
	<h2><?php echo __('Subcategoria') ?></h2>
  <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add',$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar</span> ', array('controller' => 'categorias','action' => 'index',$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	

        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			<th><?php echo __('Imagen') ?></th>
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Descripcion') ?></th>
                        <th><?php echo __('Categoria') ?></th>
                         <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($subcategorias as $subcategoria): ?>
	<tr>
		<td><?php echo $this->Html->image('uploads/subcategoria/imagen/'.$subcategoria['Subcategoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?> </td>
		<td><?php echo $subcategoria['Subcategoria']['nombre']; ?> </td>
                <td><?php echo $subcategoria['Subcategoria']['descripcion']; ?> </td>
                <td><?php echo $subcategoria['Categoria']['nombre']; ?> </td>
		
<td class="actions">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view', $subcategoria['Subcategoria']['id'],$id_categoria),array('class'=> 'btn btn-primary','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $subcategoria['Subcategoria']['id'],$id_categoria),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"></span> ',array('action' => 'delete', $subcategoria['Subcategoria']['id'],$id_categoria), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $subcategoria['Subcategoria']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
        </div>