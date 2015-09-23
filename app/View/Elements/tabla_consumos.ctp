<?php echo $this->Html->script('table-script')?>
<?php 
$cont=1;    
$total =0; 
?>
<div class="caja_consumos">
<table style="width: 100%" id="consumos">
        <thead class="bg-primary">
            <th>#</th>
            <th>Producto</th>
            <th class="th_price">Cantida</th>
            <th class="th_price">Precio</th>
        </thead>
    <?php foreach ($consumos as $consumo): 
        
            $pedi=$consumo['consumos']['pedido_id'];
            $prod=$consumo['consumos']['id'];
            $id_consumo=$consumo['consumos']['id'];
            $total = $total + ($consumo['0']['precio'] * $consumo['consumos']['cantidad']);
            ?>
        <tr id="<?php echo $prod ?>" class="<?php if($consumo['consumos']['estado']==1) echo "bg-success "; else echo "bg-warning "; ?>">
                <td><?php echo $cont++;?></td>
                <td><div class="text <?php if($consumo['consumos']['anulacion']==0) echo "text-danger"; ?> "><?php echo $consumo['consumos']['producto'] ?></div></td>
                <td>
                    <?php if($consumo['consumos']['estado']!=0): ?>
                    <?php echo $consumo['consumos']['cantidad'] ?>
                    <?php else:?>
                    <button class="btn-success" onclick="SetCantidad('<?php echo $prod;?>')"><?php echo $consumo['consumos']['cantidad'] ?></button>
                    <?php endif; ?>
                    
                </td>
                <td><div class="text-right"><?php echo number_format($consumo['0']['precio'] * $consumo['consumos']['cantidad'],2) ?></div></td>
                
<!--               <td>
                    <?php //if($consumo['consumos']['estado']==0): ?>
                        <?php //echo $this->Form->button('<i class="glyphicon glyphicon-remove"></i>', array('type' => 'button','onclick' => "unsetProducto('$pedi','$prod');",'class'=>'btn btn-danger')); ?>
                    <?php //else: ?>
                        <?php //echo $this->Form->button('<i class="glyphicon glyphicon-move"></i>', array('type' => 'button','onclick' => "checkMove('$id_consumo');",'class'=>'btn btn-warning')); ?>
                    <?php //endif; ?>
                </td>-->
   <?php //echo $this->Html->link($mesa['tmp_mesas']['tipo'],array(),array('class'=>'btn btn-primary btn-lg','data-toggle'=>'modal','data-target'=>'.bs-example-modal-sm','onclick'=>'setMesa(); return false;')); ?>
    </tr>   
    
    
    
    <?php 
    
    foreach ($detalle as $item):
        if($id_consumo == $item['consumos']['consumo_id']):
            
            $total = $total + $item['consumos']['precio'];
            ?>
    <tr class="<?php if($consumo['consumos']['estado']==1) echo "bg-success "; else echo "bg-warning "; ?>">
                <td>&nbsp;</td>
                <td><?php echo $item['consumos']['producto'] ?></td>
                <td></td>
                <td><div class="text-right"><?php echo $item['consumos']['precio'] ?></div></td>
<!--                <td>&nbsp;</td>-->
   <?php //echo $this->Html->link($mesa['tmp_mesas']['tipo'],array(),array('class'=>'btn btn-primary btn-lg','data-toggle'=>'modal','data-target'=>'.bs-example-modal-sm','onclick'=>'setMesa(); return false;')); ?>
    </tr>   
    <?php 
        endif;
    endforeach; ?>
    
    
    <?php endforeach; ?>
    
    
    
    
    
    
            <tr>
                <td colspan="4">
                    <p class="text text-right"><?php echo __("Precio total ")?><span id="total_consumo"><?php echo $total; ?></span></p> 
                </td>
            </tr>
    </table>
</div>