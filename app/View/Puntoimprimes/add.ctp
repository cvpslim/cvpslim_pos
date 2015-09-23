<div class="container">
    <?php
echo $this->Form->create('Puntoimprime');
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('spooler',array('label' =>__('Nombre Carpeta (sin espacios)')));
echo $this->Form->input('impresora_id',array('label' =>__('Area Recepcion'), 'type'=>'hidden', 'value'=>$impresora_id));

 echo $this->Form->end('Guardar');
?>
</div>
