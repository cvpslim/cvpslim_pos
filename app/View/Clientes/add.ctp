<div class="Clientes form">
    <h2><?php echo __('Clientes') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3><?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Cliente');

echo $this->Form->input('nit',array('label' =>__('Nit')));
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('apellido',array('label' =>__('Apellido')));
echo $this->Form->input('fecha_nac', 
    array(
        'type' => 'date',
        'label' => 'Fecha Nac.:<span>*</span>',
        'dateFormat' => 'DMY',
        'empty' => array(
            'day' => 'Dia',
            'month'   => 'Mes',
            'year'  => 'Año'
        ),
        'minYear' => date('Y')-90,
        'maxYear' => date('Y')-20,
        'options' => array('1','2')
    )
);
echo $this->Form->input('razon_social',array('label' =>__('Razon Social')));
echo $this->Form->input('direccion',array('label' =>__('Direccion')));
echo $this->Form->input('Telefono1',array('type' => 'text'),array('label' =>__('Telefono1')));
echo $this->Form->input('telefono2',array('type' => 'text'),array('label' =>__('Telefono2')));
echo $this->Form->input('telefono3',array('type' => 'text'),array('label' =>__('Telefono3')));
echo $this->Form->input('email1',array('label' =>__('Email1')));
echo $this->Form->input('email2',array('label' =>__('Email2')));
echo $this->Form->input('email3',array('label' =>__('Email3')));
echo $this->Form->input('tipo',array('label' =>__('Tipo')));
echo $this->Form->input('credito',array('label' =>__('Credito'), 'type'=>'text'));
echo $this->Form->input('porcentaje_descuento', array('type'=>'text'));
echo $this->Form->end('Guardar');
?>
</div>


