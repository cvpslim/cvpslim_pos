<?php 
$cont=1;    
$total =0; 
?>
<h2>Datos de factura</h2>
<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">NIT</label>
    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="NIT">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIT">
  </div> 
  <button type="submit" class="btn btn-default">Finalizar Pago</button>
</form>
<table style="width: 100%">
    <thead class="bg-primary">
        <th>#</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cant</th>
        </thead>
            
    <?php foreach ($consumos as $consumo): 
        
            $pedi=$consumo['consumos']['pedido_id'];
            $prod=$consumo['productos']['id'];
            $id_consumo=$consumo['consumos']['id'];
            $total = $total + ($consumo['productos']['precio'] * $consumo['consumos']['cantidad']);
            ?>
            <tr>
                <td><?php echo $cont++;?></td>
                <td><?php echo $consumo['productos']['nombre'] ?></td>
                <td><?php echo $consumo['productos']['precio'] ?></td>
                <td><?php echo $consumo['consumos']['cantidad'] ?></td>
   <?php //echo $this->Html->link($mesa['tmp_mesas']['tipo'],array(),array('class'=>'btn btn-primary btn-lg','data-toggle'=>'modal','data-target'=>'.bs-example-modal-sm','onclick'=>'setMesa(); return false;')); ?>
    </tr>   
    <?php endforeach; ?>
            <tr>
                <td colspan="5">
                    <p class="text text-right"><?php echo __("Precio total ").$total?></p> 
                </td>
            </tr>
</table>