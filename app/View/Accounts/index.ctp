<?php echo $this->Html->script('accounts')?>
<div class="list-group">  
<!--  <a href="#" class="list-group-item disabled">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
  <a class="btn list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-folder-open"></i>  Abrir Cuenta</a>
</div>






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
            <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-success btn-lg btn-block" onclick="validateUserAccount(0);">OK</button></span>
        </div>
    </div>
  </div>
</div>


<!-- Small modal -->


