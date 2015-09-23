<div class="nav-collapse">
<?php if(isset($splits)): ?>
    <span class="right nav-tabs text-info">Cantidad splits <?php echo $splits; ?>&nbsp;</span>
    &nbsp;&nbsp;&nbsp;
<?php endif; 
 //print_r($consumo);
?>

    
</div>
<?php
if(count($consumos)>0): ?>
<span class="text-muted h4"><?php echo __("Split: ").$consumo[0]['consumos']['split'] ?></span>
<!--<span class="btn btn-success" id="proceso<?php //echo $consumo[0]['consumos']['split']; ?>" onclick="moveHere('<?php //echo $consumo[0]['consumos']['split']; ?>')">MOVER AQUI</span>-->
<div id="mas_option">
</div>
<div id="tabla_consumos_<?php echo $consumo[0]['consumos']['split']; ?>">
<?php
echo $this->element('tabla_consumos', array("consumos"=>$consumo, 'detalle'=>$detalle));
?>
</div>
<?php else : ?>
<div class="alert alert-danger">Consumo vacio!</div>
<?php endif; ?>