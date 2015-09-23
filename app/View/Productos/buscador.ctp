<h3>Resultado por producto</h3>

<div class="row">
    <div class="col-md-8">
        <div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear '), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Listar por orden de ingreso'), array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('listar alfabeticamente'), array('action' => 'ordenaralfaveticamente'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('listar por categorias'), array('action' => 'listarporcategoria'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
       
        <ul/>
        
</div>
    </div>
    <div class="col-md-4">
        
        <FORM  class="text-primary" ACTION="buscador" METHOD="GET"> 
        <INPUT  TYPE="text" NAME="texto" ><BR> 
        <INPUT class="search-query" TYPE="submit" VALUE="Buscador"> 
       </FORM>
    </div>
</div>

<table class="table table-striped">
		<tr>
			
                      
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Precio') ?></th>
       
                         <th><?php echo __('Activar') ?></th>
                       
                        
                        <th><?php echo __('Editar') ?> </th>
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($prods as $prod): ?>
	<tr>
	
		<td><?php echo $prod['productos']['nombre']; ?> </td>
               
                          
		<td><?php echo $prod['productos']['precio']; ?> </td>
                
 
               

                
 <td><input name="obligatorio" type="checkbox" <?php if($prod['productos']['estado']==1) echo'checked'; ?> value="<?php echo $prod['productos']['id']; ?>"  onchange="guardarEstado(this);"></td> 

         
<td class="actions">
   
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $prod['productos']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $prod['productos']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar %s?', $prod['productos']['nombre'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>