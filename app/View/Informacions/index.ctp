<div class="impresora">
	<h2><?php echo __('Informacion adicional') ?></h2>
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
                         <th><?php echo __('crear opcion') ?></th>
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
	<?php foreach ($informacions as $informacion): ?>
	<tr>
		
                <td><?php if($var!=$informacion['informacions']['nombre']){
                        echo $informacion['informacions']['nombre'];
                        $var=$informacion['informacions']['nombre'];
                        $v=1;
                         $v1=1;
                        $v2=1;
                        $v3=1;
                } ?> </td>
                
                <td><?php if($var1!=$informacion['informacions']['pregunta']){
                    echo $informacion['informacions']['pregunta'];
                    $var1=$informacion['informacions']['pregunta'];
                }
                 ?> </td>
                
                <td><?php echo $informacion['tmp']['nombre']; ?> </td>
                <td><?php echo $informacion['tmp']['precio']; ?> </td>
                
		
<td class="actions">
    
    <?php if($v!=0)
    {
        echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Crear opcion </span> ', array('controller'=>'guarns','action' => 'add', $informacion['informacions']['id']),array('class'=> 'btn btn-primary','escape'=>false));
        $v=0;
    }?>
<td><?php if($v1!=0){
echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span> ',array('action' => 'view',$informacion['informacions']['id']),array('class'=> 'btn btn-primary','escape'=>false));
 $v1=0;
} ?></td>
<td> <?php if($v2!=0)
{echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $informacion['informacions']['id']),array('class'=> 'btn btn-warning','escape'=>false)); 

 $v2=0;
} ?></td>
<td> <?php if($v3!=0){
echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'delete', $informacion['informacions']['id']), 
array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $informacion['informacions']['id'])); 
 $v3=0;
}?></td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>

