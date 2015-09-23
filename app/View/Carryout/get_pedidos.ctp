<?php echo $this->Html->script('ajax-carryout')?>	
<div id="panel-uno" class="panel-uno">
    <?php echo $this->element('carryout', $carry); ?>
</div>
<div id="panel-dos" class="panel-dos">
    <?php echo $this->element('delivery', $delivery); ?>
</div>

<div class="modal fade bs-example-modal-sm" id="MymodalCarry" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
      <div class="modal-content" id="keyboard_carryout">
        <p class="bg-danger text text-center" id="validacion"></p>
        <?php echo $this->element('form_padmesero') ?>
        <div class="row">
            <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-danger btn-lg btn-block" onclick="clearInput();">Limpiar</button></span>
            <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-success btn-lg btn-block" onclick="validateUser();">OK</button></span></div>
    </div>
  </div>
</div>