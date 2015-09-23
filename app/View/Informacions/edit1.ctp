<?php foreach ($informs as $inform): ?>
<?php  $id=$inform['informacions']['id']; ?>
<?php endforeach;?>
<div class="impresoras form">
    <h2><?php echo __('Informacion adicional') ?></h2>
    <div class=”actions”>
	<ul>
		 <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index1',),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
	</ul>
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Informacion');

echo $this->Form->input('id');
echo $this->Form->input('nombre');
echo $this->Form->input('pregunta');

echo $this->Form->input('numero_id',array('options' => $numeros));

echo $this->Form->end('Guardar');
?>
</div>
 <h2><?php echo __('Informacion Opcional') ?></h2>
<?php  echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Crear opcion </span> ', array('controller'=>'guarns','action' => 'add1', $id ),array('class'=> 'btn btn-primary','escape'=>false));?>

<?php $var="";
        $var1="";?>
<table class="table table-striped">

                         <th><?php echo __('Opciones') ?></th>
                         <th><?php echo __('Precio') ?></th>
                          <th><?php echo __('Editar') ?></th>
                           <th><?php echo __('Eliminar') ?></th>
                         
	<?php foreach ($informacions as $informacion): ?>
	<tr>
		
                <td><?php echo $informacion['guarns']['nombre']; ?> </td>
                <td><?php echo $informacion['guarns']['precio']; ?> </td>
                <td><?php  echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ', array('controller'=>'guarns','action' => 'edit1', $informacion['guarns']['id'], $id  ),array('class'=> 'btn btn-warning','escape'=>false));?>
</td>           <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'guarns','action' => 'delete1', $informacion['guarns']['id'],$id ), 
array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $informacion['guarns']['id'])); 
?>
</td>
</tr>
<?php endforeach; ?>
</table>
