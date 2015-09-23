<div class="impresora">
	<h2><?php echo __('Informacion obligada') ?></h2>
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
   
        <ul/>
        
</div>
	<table class="table table-striped">
		<tr>
			
                        <th><?php echo __('Nombre') ?></th>
                        <th><?php echo __('Pregunta') ?></th>
                        <th><?php echo __('Opciones') ?></th>
                        <th><?php echo __('Precio') ?></th>
                        <th><?php echo __('Crear Opciones') ?></th>
                        <th><?php echo __('Detalle') ?></th>
                        <th><?php echo __('Editar') ?></th>
                        <th><?php echo __('Eliminar')?></th>
                        
		</tr>
                
                   <?php
                $var="";
                $var1="";
                ?>
                <?php $v=0;
                        $v1=0;
                        $v2=0;
                        $v3=0;
                        ?>
	<?php foreach ($informacionobls as $iformacionobl): ?>
            
	<tr>
		
		<td><?php if($var!=$iformacionobl['informacionobls']['nombre'])
                {echo $iformacionobl['informacionobls']['nombre']; 
                $var=$iformacionobl['informacionobls']['nombre'];
                  $v=1;
                  $v1=1;
                  $v2=1;
                  $v3=1;
                }?> </td>
		<td><?php if($var1!=$iformacionobl['informacionobls']['pregunta'])
                {
                echo $iformacionobl['informacionobls']['pregunta']; 
                $var1=$iformacionobl['informacionobls']['pregunta'];
                }
                ?> </td>
                <td><?php echo $iformacionobl['tmp']['nombre']; ?> </td>
                <td><?php echo $iformacionobl['tmp']['precio']; ?> </td>
               
                   
                 
	
<td class="actions">
 <?php if($v!=0){ echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Crear opciones </span> ',array('controller'=>'Guarniciones','action' => 'add', $iformacionobl['informacionobls']['id']),array('class'=> 'btn btn-warning','escape'=>false));
$v=0; 

}?>


 <td><?php if($v1!=0){
    echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view',$iformacionobl['informacionobls']['id']),array('class'=> 'btn btn-primary','escape'=>false));
    $v1=0;  
}?></td>
<td> <?php if($v2!=0){ echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $iformacionobl['informacionobls']['id']),array('class'=> 'btn btn-warning','escape'=>false));
$v2=0; 

}?>
</td>
<td> <?php if($v3!=0){
        echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $iformacionobl['informacionobls']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $iformacionobl['informacionobls']['id'])); 
        $v3=0; 
        }?></td>
	</tr>
        
        
	<?php endforeach; ?>
	</table>
</div>

