<?php //echo $this->Html->script('move-here')?>
<!--  <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">Producto</div>
        <div class="col-xs-1 col-sm-1 col-md-1">cantidad</div>
</div>
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">Producto</div>
        <div class="col-xs-2 col-sm-2 col-md-2">cantidad</div>
</div>-->

<div class="nav-collapse">
<?php if(isset($splits)): ?>
    <span class="right nav-tabs text-info">Cantidad splits <?php echo $splits; ?>&nbsp;</span>
    &nbsp;&nbsp;&nbsp;
<?php endif; 
 //print_r($consumo);
?>  
</div>
<div id="prueba2">here</div>
<span class="btn btn-success" id="proceso<?php echo $consumo[0]['consumos']['split']; ?>" onclick="moveHere('<?php echo $consumo[0]['consumos']['split']; ?>')">MOVER AQUI</span>
<?php
if(count($consumos)>0): ?>
<span class="text-muted h4"><?php echo __("Split: ").$consumo[0]['consumos']['split'] ?></span>
<span class="btn btn-success" style="visibility: hidden;" id="prueba" onclick="moveHere('<?php echo $consumo[0]['consumos']['split']; ?>')">MOVER AQUI</span>
<div id="mas_option">
</div>

<div id="tabla_consumos_<?php echo $consumo[0]['consumos']['split']; ?>">

    
<?php 
$cont=1;    
$total =0; 
?>
    
    
    
    
    <table style="width: 100%" id="consumos" onclick="">
    <thead class="bg-primary">
        <th>#</th>
        <th>Producto</th>
        <th class="th_price">Cant</th>
        <th class="th_price">Precio</th>
<!--        <th> Accion</th>-->
        </thead>
            
    <?php foreach ($consumos as $consumo): 
        
            $pedi=$consumo['consumos']['pedido_id'];
            $prod=$consumo['consumos']['id'];
            $id_consumo=$consumo['consumos']['id'];
            $total = $total + ($consumo['0']['precio'] * $consumo['consumos']['cantidad']);
            ?>
        <tr id="<?php echo $prod ?>" class="<?php if($consumo['consumos']['estado']==1) echo "bg-success "; else echo "bg-warning "; ?>">
                <td><?php echo $cont++;?></td>
                <td><?php echo $consumo['consumos']['producto'] ?></td>
                <td><?php echo $consumo['consumos']['cantidad'] ?></td>
                <td><?php echo $consumo['0']['precio'] ?></td>
                
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
                <td><?php echo $item['consumos']['precio'] ?></td>
<!--                <td>&nbsp;</td>-->
   <?php //echo $this->Html->link($mesa['tmp_mesas']['tipo'],array(),array('class'=>'btn btn-primary btn-lg','data-toggle'=>'modal','data-target'=>'.bs-example-modal-sm','onclick'=>'setMesa(); return false;')); ?>
    </tr>   
    <?php 
        endif;
    endforeach; ?>
    <?php endforeach; ?>
            <tr>
                <td colspan="4">
                    <p class="text text-right"><?php echo __("Precio total ")?><span id="total_consumo"><?php echo $total ?></span></p> 
                </td>
            </tr>
    </table> 
</div>
<?php else : ?>
<div class="alert alert-danger">Consumo vacio!</div>
<?php endif; ?>