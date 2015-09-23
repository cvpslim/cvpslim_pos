<div class="Cuentas form">
    <h2><?php echo __('Cuentas') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
 
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
    
<?php
echo $this->Form->create('Datosfactura');
echo $this->Form->input('NIT',array('label'=>__('NIT')));
echo $this->Form->input('nroautorizacion',array('label'=>__('Autorizacion Nro')));
echo $this->Form->input('fechainicio',array('label'=>__('Fecha Inicio')));
echo $this->Form->input('fechalimite',array('label'=>__('Fecha limite')));
echo $this->Form->input('actividadeconomica',array('label'=>__('Actividad economica')));
echo $this->Form->input('llave',array('label'=>__('Llave')));
echo $this->Form->input('textogracias',array('label'=>__('Texto de gracias')));


echo $this->Form->end('Guardar');
?>
</div>


