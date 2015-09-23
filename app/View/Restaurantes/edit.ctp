<div class="roles form">
    <h2><?php echo __('Restaurant') ?></h2>
 
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Restaurante');
echo $this->Form->input('id');
echo $this->Form->input('nombre',array('label' =>__('nombre')));
echo $this->Form->input('telefono',array('type' => 'text'),array('label'=>__('telefono')));
echo $this->Form->input('telefono movil',array('type' => 'text'),array('label'=>__('telefono movil')));
echo $this->Form->input('zona',array('type' => 'text'),array('label'=>__('zona')));
echo $this->Form->input('direccion',array('label' =>__('direccion')));
echo $this->Form->input('ciudad',array('label' =>__('ciudad')));
echo $this->Form->input('email',array('type' => 'text'),array('label' =>__('AutorizacionNro')));
echo $this->Form->input('facebook',array('type' => 'text'),array('label' =>__('AutorizacionNro')));
echo $this->Form->end('Guardar');
?>
</div>
