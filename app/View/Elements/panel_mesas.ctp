   <?php
    foreach ($mesas as $mesa): 
        $estilo = ($mesa['pedidos']['estado'] != "") ? 'btn-danger' : 'btn-primary'; // $r is set to 'No'?>
   <?php //echo $this->Html->link($mesa['tmp_mesas']['tipo'],array(),array('class'=>'btn btn-primary btn-lg','data-toggle'=>'modal','data-target'=>'.bs-example-modal-sm','onclick'=>'setMesa(); return false;')); ?>
    
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 nopadding"><button class="btn <?php echo $estilo; ?> btn-lg btn-block"  onclick="clearPad('<?php echo $mesa['tmp_mesas']['id']?>');" data-toggle="modal" data-target=".bs-example-modal-sm"><?php echo $mesa['tmp_mesas']['tipo'] ?></button></div>
       <?php endforeach; ?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
        <p class="bg-danger text text-center" id="validacion"></p>
        <?php echo $this->element('form_padmesero') ?>
        <div class="row">
            <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-danger btn-lg btn-block" onclick="clearMeseroPad();">Limpiar</button></span>
            <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-success btn-lg btn-block" onclick="validateUser();">OK</button></span>
        </div>
    </div>
  </div>
</div>