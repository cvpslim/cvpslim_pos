<div class="areas form">
    <h2><?php echo __('Areas') ?> </h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <div class="panel-heading">
    <h3><?php echo __('Datos Editables') ?> </h3>
<?php
echo $this->Form->create('Area');
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('descripcion',array('label' =>__('Descripcion')));
echo $this->Form->input('tipo',array('label' =>__('Tipo')));
echo $this->Form->input('pedir_nombre', array(
                        'type'=>'select',
                        'label'=>'Pedir nombre en las mesas',
                        'options'=>array("NO" => "NO", "SI" => "SI")
                    )
                );
echo $this->Form->input('mostrar_principal', array(
                        'type'=>'select',
                        'label'=>'Mostrar mesas principal',
                        'options'=>array("NO" => "NO", "SI" => "SI")
                    )
                );
echo $this->Form->input('imprime_id', array(
                        'type'=>'select',
                        'label'=>'Seleccionar impresora'
                        
                    )
                );

?>
    
<?php echo $this->Form->end('Guardar', array("class"=>"btn btn-primary"),array('label' =>__(' Guardar ')));?>

</div>
</div>


 <di>
                <h3> Listar  Mesas</h3>
                 <?php echo $this->Html->link('<span class=" glyphicon glyphicon-download-alt"> Crear  mesas </span> ', array('action' => 'add',$area['areas']['id'],'controller' => 'mesas'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                 <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"> Eliminar todo </span> ',array('controller'=>'Recets','action' => 'mesas',$area['areas']['id']), 
                                array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que quiere vaciar las  mesas ?', $area['areas']['id'])); ?>
                <table class="table table-striped">
                    <tr>
                       <th><?php echo __('Tipo/Nombre') ?></th>
                        <th><?php echo __('Nro Sillas') ?></th>
                     
                        <th><?php echo __('Editar') ?> </th>
                        <th><?php echo __('Eliminar') ?> </th>
                    </tr>
                    <?php foreach ($mesas as $mesa): ?>
                    <tr>
                        <td><?php echo $mesa['mesas']['tipo']; ?></td>
                        <td><?php echo $mesa['mesas']['nrosillas']; ?></td>
                        
                       
                        <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('controller'=>'mesas','action' => 'edit', $mesa['mesas']['id'],$area['areas']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?></td>


                        <td> <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'mesas','action' => 'delete', $mesa['mesas']['id'],$area['areas']['id']), 
                                array('class'=> 'btn btn-danger','escape'=>false), sprintf('Esta seguro de que desea eliminar la mesa ?', $mesa['mesas']['tipo'])); ?></td>

                    </tr>
                    <?php endforeach; ?>
                </table>
            </di>

