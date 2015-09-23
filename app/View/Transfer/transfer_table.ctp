<div class="container-fluid">
<?php foreach ($areas as $area): ?>
     <?php //echo $this->Html->link($categoria['categorias']['nombre'],array(),array('class'=>'btn btn-primary btn-lg', "onClick"=>"GetSubCategorias(".$categoria['categorias']['id']."); return false")); ?>
    <div><button class="btn btn-block btn-lg btn-primary" onclick="getMesasTransfer('<?php echo $area['areas']["id"]; ?>');"><?php echo $area['areas']["nombre"]; ?></button></div>			
     <?php endforeach; ?>
</div>