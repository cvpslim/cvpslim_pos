<?php foreach ($categorias as $categoria): ?>
<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 nopadding"><?php echo $this->Html->link($categoria['categorias']['nombre'],array(),array('class'=>'btn btn-warning btn-lg btn-block', "onClick"=>"GetItemsModifiers(".$categoria['categorias']['id']."); return false")); ?></div>
<?php endforeach; ?>