<div class="cuentas form">
    <h2><?php echo __('Datos para la factura') ?></h2>
<div class=”Accion”>
	
</div>
    <h3><?php echo __('Datos Editables') ?></h3>
<?php
echo $this->Form->create('Datosfactura');
echo $this->Form->input('id');
echo $this->Form->input('NIT',array('type' => 'text'),array('label'=>__('NIT')));
echo $this->Form->input('nroautorizacion',array('type' => 'text'),array('label'=>__('Autorizacion Nro')));
echo $this->Form->input('fechainicio',array('label'=>__('Fecha Inicio')));
echo $this->Form->input('fechalimite',array('label'=>__('Fecha limite')));
echo $this->Form->input('actividadeconomica',array('label'=>__('Actividad economica')));

?>
<label >Llave</label>
    <?php
echo $this->Form->textarea('llave',array('style'=>'width:600px;height:100px;'));
?>
  <label >Texto de gracias</label>
<?php echo $this->Form->textarea('textogracias',array('style'=>'width:600px;height:100px;'));
echo $this->Form->end('Guardar');
?>
</div>
