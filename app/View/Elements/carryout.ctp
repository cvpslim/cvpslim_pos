<div class="text text-center h3">Entrega</div>
<?php
foreach ($carry as $mesa): 
    $estilo = ($mesa['pedidos']['estado'] != "") ? 'btn-danger' : 'btn-primary'; ?>

    
<button class="btn <?php echo $estilo; ?> btn-lg btn-block"  onclick="clearPad('<?php echo $mesa['tmp_mesas']['id']?>');" data-toggle="modal" data-target=".bs-example-modal-sm">&nbsp;<?php echo $mesa['pedidos']['persona'] ?></button>
    

<?php endforeach;?>