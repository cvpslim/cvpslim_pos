
<h3> Listar productos por categoria </h3>

<div class="row">
    <div class="col-md-8">
        <div class="actions">
	
     <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear '), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Listar por orden de ingreso'), array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('listar alfabeticamente'), array('action' => 'ordenaralfaveticamente'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
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
<div class="row">
  <div class="col-md-4">
<div class="panel panel-primary">
<table class="table table-striped">         
    <tr>
        <th> Categorias </th>
    </tr>
    <?php foreach ($productos as $producto): ?>
   
           <tr>

                       <td>   <?php echo $this->Html->link( $producto['categorias']['categoria'], array('action' => 'listarporcategoria2',$producto['categorias']['id'])); ?> </td>
                       
                         
		</tr>

            <tr>

    <?php endforeach; ?>
</table>
</div>
</div>
    
  
    <div class="col-md-8">
        
<div class="panel panel-primary">
<table class="table table-striped">         
    <tr>
        <th> Productos </th>
    </tr>
    
    <tr>
        <th> Nombre  </th>
        <th> Precio </th>
        <th> Descripcion </th>
        <th> Subcategoria </th>
         <th> Editar </th>
          <th> Eliminar </th>
    </tr>
   
   <?php $sw=0?>
    
<?php foreach ($listars as $listar): ?>
   
           <tr>

               <td>   <?php echo  $listar['productos']['nombre']?> </td>
               <td>   <?php echo  $listar['productos']['precio']?> </td>
               <td>   <?php echo  $listar['productos']['descripcion']?> </td>
               <td>   <?php echo  $listar['subcategorias']['nombre']?> </td>
               <?php $sw=$sw+1;?>
               
   <td class="actions">
   
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $listar['productos']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
<td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $listar['productos']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar %s?', $listar['productos']['nombre'])); ?></td>
	
        
		</tr>

            <tr>

    <?php endforeach; ?>
                 <?php if($sw==0){?>
            
                    <tr>
                        <th> <?php echo "  No existen productos ....................... ";?> </th>
                        
                    </tr>
           
                     
                 <?php }?>
                
 
</table>
   
</div>
    </div>
</div>

