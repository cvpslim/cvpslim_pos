<div class="categoria view">

<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Categoria  : ') ?><?php echo $categoria['Categoria']['nombre']; ?></b></font></div>
 <div class="panel-footer">
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $categoria['Categoria']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar</span> ',array('action' => 'delete', $categoria['Categoria']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $categoria['Categoria']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
        
</ul>
     <div class="h3"><li><?php echo __('Descripcion') ?>:  </b></font></em><?php echo$categoria['Categoria']['descripcion']; ?>
         </li></div>
     <table class="table table-striped">
         <tr>
             <td><font size="+0,5"><b><?php echo __('Color de boton') ?> :  </b></font></em> <button style="background-color:<?php echo $categoria['Colore']['codigo']; ?>"><?php echo $categoria['Colore']['nombre']; ?></button></td>
             <td><font size="+0,5"><b><?php echo __(' Color de fuente ') ?> :  </b></font></em> <button style="background-color:<?php echo $categoria['Fuente']['codigo']; ?>"><?php echo $categoria['Fuente']['nombre']; ?></button>
                 </td>
                 <td>        
                            <td><font size="+0,5"><b><?php echo __('Imagen') ?> :  </b></font> <?php echo $this->Html->image('uploads/categoria/imagen/'.$categoria['Categoria']['imagen'], array('alt' => 'image','height'=>'100', 'width'=>'100')); ?>
</td>
         </tr>
     </table>
     
</div>

  
</div>
   