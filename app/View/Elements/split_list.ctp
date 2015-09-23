 <div class="container-fluid">
        <div class="row">
<!--                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 nopadding">
                    <button class="btn btn-primary btn-lg btn-block" onclick="opcionMoverNuevo();"><i class="glyphicon glyphicon-plus"></i>Nuevo Split</button>  
                </div>-->
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 nopadding">
                    <button class="btn btn-lg btn-primary btn-block" onclick="changeNew();"><i class="glyphicon glyphicon-plus"></i> Nuevo Split</button>
                </div>
            </div>
            
        
    <?php foreach ($splits as $split) :?>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 nopadding">
                <button class="btn btn-warning  btn-lg btn-block" onclick="detalleSplit('<?php echo $split['consumos']['split'] ?>')">
                    <span class="badge pull-right"><?php echo $split[0]['cantidad'] ?> Items</span>
                    Split <?php echo $split['consumos']['split'] ?>&nbsp;&nbsp;
                </button>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 nopadding">
                <button  onclick="changeSplit('<?php echo $split['consumos']['split'] ?>');" class="btn btn-lg btn-success btn-block">Cambiar</button>
                </div>
             </div>
    <?php endforeach; ?>

       </div>