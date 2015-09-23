<?php 
    //print_r($options);
    ?>
<?php if($options[0]['consumos']['estado'] == '0'): ?>
<button class="btn btn-danger btn_margen" onClick="unsetProducto('<?php echo $id ?>')"><i class="glyphicon glyphicon-trash"></i> Borrar</button>
<?php else: ?>
    <?php if($options[0]['consumos']['anulacion'] == '1' & $options[0]['consumos']['descuento'] == '0' ): ?>
    <button onclick="anular('<?php echo $id ?>')" class="btn btn-danger btn_margen"><i class="glyphicon glyphicon-remove-circle"></i> Anular</button>
    <button onclick="descuento('<?php echo $id ?>')" class="btn btn-primary btn_margen"><i class="glyphicon glyphicon-minus"></i> Descuento</button>
    <?php endif; ?>
    <button onclick="checkMove('<?php echo $id ?>')" class="btn btn-warning btn_margen"><i class="glyphicon glyphicon-transfer"></i> Mover</button>
<?php endif; ?>



