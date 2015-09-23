<div class="areas form">
    <h2><?php echo __('Areas')?></h2>
    <div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atras </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>

<?php
echo $this->Form->create('Area');
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

 echo $this->Form->end('Guardar');
?>

</div>

