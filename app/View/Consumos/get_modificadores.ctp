<?php echo $this->element('btn_cerrar_pop_up')?>
<div style="width:600px;">
<div>
    <h3 class="text-info"><?php echo $pregunta[0]['informacions']['pregunta']; ?> (<span class="h4" id="cantidad"><?php echo $pregunta[0]['informacions']['numero_id']; ?></span><span class="h4"> opciones</span>)</h3>
</div>
<div class="row">
 <?php
    foreach ($opciones as $mesa): ?> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
    <button id="btn-<?php echo $mesa['guarns']['id']?>" class="btn btn-default btn-lg btn-block"  onclick="setModificador('<?php echo $mesa['guarns']['id']?>','<?php echo $mesa['guarns']['nombre']?>','<?php echo $mesa['guarns']['precio']?>');" data-toggle="modal" data-target=".bs-example-modal-sm"><?php echo $mesa['guarns']['nombre']?></button>
</div>
<?php endforeach; ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
        <button class="btn btn-danger btn-lg btn-block"  onclick="setBlanco();" data-toggle="modal" data-target=".bs-example-modal-sm">
            Salir
        </button>
</div>
</div>
    
<!-- <nav>
  <ul class="pager">
      <li class="next btn-default" onclick="setBlanco();"><a>Salir <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>-->
</div>

