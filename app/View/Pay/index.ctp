<?php echo $this->Html->script('pay-functions')?>
<?php
echo $this->element('detalle_consumo', array("consumos"=>$consumo));
?>