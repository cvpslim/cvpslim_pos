<div class="text text-center">
    <div class="row row-fluid">
    <?php
    foreach ($mesas as $mesa):
        $estilo = ($mesa['pedidos']['estado'] != null) ? 'btn-danger' : 'btn-primary';
        $marca = ($mesa['pedidos']['estado'] != null) ? 'disabled' : ''; // $r is set to 'No'?>
    
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
           <button class="btn btn-lg <?php echo $estilo ?>" <?php echo $marca ?> onclick="transferPedido('<?php echo $mesa['tmp_mesas']['id']?>');" data-toggle="modal" data-target=".bs-example-modal-sm"><?php echo $mesa['tmp_mesas']['tipo'] ?></button> 
        </div>
    <?php endforeach; ?>
        </div> 
</div>