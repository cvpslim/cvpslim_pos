<div class="subcategoria">
	<h2><?php echo __('Subcategoria') ?></h2>
  <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear Nuevo'), array('action' => 'add1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	    <ul/>
        
</div>
         <div id="proceso">
                    
                </div> 
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Descripcion') ?></th>
                        <th><?php echo __('Categoria') ?></th>
                         <th><?php echo __('Color de boton') ?></th>
                         
                         <th><?php echo __('Activar') ?> </th>
                             <th>Crear producto </th>
                       
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
		</tr>
	<?php foreach ($subcategorias as $subcategoria): ?>
	<tr>
		<td><?php echo $subcategoria['Subcategoria']['nombre']; ?> </td>
                <td><?php echo $subcategoria['Subcategoria']['descripcion']; ?> </td>
                <td><?php echo $subcategoria['Categoria']['nombre']; ?> </td>
               
                <td>
                <button style="background-color:<?php echo $subcategoria['Colore']['codigo']; ?>"><font color=<?php echo $subcategoria['Colore']['codfuente']; ?>><?php echo $subcategoria['Colore']['fuente']; ?></font></button>
                </td>
                
<td><input name="obligatorio" type="checkbox" <?php if($subcategoria['Subcategoria']['estado']==1) echo'checked'; ?> value="<?php echo $subcategoria['Subcategoria']['id']; ?>"  onchange="guardarestadosubcategoria(this);"></td> 

<td class="actions">
     <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> ',array('controller'=>'productos','action' => 'consubcategoria', $subcategoria['Subcategoria']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit1', $subcategoria['Subcategoria']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete1', $subcategoria['Subcategoria']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $subcategoria['Subcategoria']['nombre'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
        </div>
