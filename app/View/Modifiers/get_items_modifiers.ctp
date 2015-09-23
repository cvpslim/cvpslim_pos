<?php if(count($modificadores)>0): ?>    
<?php foreach ($modificadores as $producto): ?>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
    <?php echo $this->Html->link($producto['adicionalguarns']['nombre'], array(),array('class'=>'btn btn-warning btn-lg btn-block', "onClick"=>"SetModifiersConsumo(".$producto['adicionalguarns']['id']."); return false")); ?>
     <?php //echo $producto['productos']['precio']; ?>
    </div>
<?php endforeach; ?>        
<!--  <div class="row-fluid col-lg-4 col-md-2 col-xs-3 col-sm-2 bg-success">
    <a href="#" class="thumbnail">
        <?php //echo $this->Html->image("coke.jpg", array('fullBase' => false, 'alt'=>'Mi imagen'));?>
    </a>
  </div>-->
<?php else: ?>
    <div class="alert alert-danger">No hay modificadores para este producto</div>
<?php endif; ?>
