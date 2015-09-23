
<div class="productos">
    
	<h2><?php echo __('Productos') ?></h2>
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
         <div id="proceso">
                    
                </div> 
	<table class="table table-striped">
		<tr>
			
                  
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Precio') ?></th>
                        <th><?php echo __('Descripcion') ?></th>
                        <th><?php echo __('Estacion Impresion') ?></th>
                         <th><?php echo __('Subcategoria') ?></th>
                    
                        <th><?php echo __('Color de boton') ?></th>
            
                       
                          <th> <?php echo __('Activar') ?></th>
                          
                       
                      
                        <th><?php echo __('Editar') ?> </th>
                        <th> <?php echo __('Eliminar') ?></th>
		</tr>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<!--<td><?php // echo $producto['Producto']['id']; ?> </td>-->
            
            
		<td><?php echo $producto['Producto']['nombre']; ?> </td>
               
                          
		<td><?php echo $producto['Producto']['precio']; ?> </td>
                <td><?php echo $producto['Producto']['descripcion']; ?> </td>
               
 <td><?php echo $producto['Impresora']['lugar']; ?> </td>
 
 
     <td><?php   echo $producto['Subcategoria']['nombre'];?> </td>
    
 
                
<td>
     <button style="background-color:<?php echo  $producto['Colore']['codigo'];  ?>"><font color=<?php echo $producto['Colore']['codfuente']; ?>><?php echo $producto['Colore']['fuente']; ?></font></button>
</td>
       
                  
        
                

 
 <td><input name="obligatorio" type="checkbox" <?php if($producto['Producto']['estado']==1) echo'checked'; ?> value="<?php echo $producto['Producto']['id']; ?>"  onchange="guardarEstado(this);"></td> 
 

 
<td class="actions">
   
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $producto['Producto']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $producto['Producto']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar %s?', $producto['Producto']['nombre'])); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>



<div id="footer">
<?php 
$actual = $this->Paginator->counter(array('format' => '%page%'));
$total = $this->Paginator->counter(array('format' => '%pages%'));
for ($i=1;$i<=$total;$i++) {
    if ($i==$actual) {
        echo ' P&aacute;gina '.$i.' ';
    } else {
        echo $this->Paginator->link($i, array('page' => $i),array('class'=> 'btn btn-primary','escape'=>false));
    }
}
echo $this->Paginator->counter(array('format' => ' Total de %count%, comenzando en el registro %start%, terminando en el %end%')) ?>
</div>



