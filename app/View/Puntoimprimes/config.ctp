<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Asignar Impresora a un area</h4>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Salir</span> ',array('controller'=>'impresoras','action' => 'index'),array('class'=> 'btn btn-danger','escape'=>false)); ?>
        </div>
        <div class="panel-body">
            <div>
                <form method="post">
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-4 col-xs-4">
                <label for="area">Seleccione area</label>
                <select class="form-control" name="area" id="area">
                <?php foreach ($areas as $area):?>
                    <option value="<?php echo $area['areas']['id']?>"><?php echo $area['areas']['nombre']?></option>
                <?php endforeach; ?>
            </select>
                <button type="submit" class="btn btn-success">Asignar Area</button>
            </div>
                 </form>
            </div>
            
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 col-xs-12">
                <h4>Areas Asignadas</h4>
                <div>
                    <?php if (count($areas_asignadas)>0):?>
                    <?php foreach ($areas_asignadas as $area_a):
                        $id_print = $area_a['areas']['id'];?>
                    <div>
                        <span><?php echo $this->Html->link('<span class="glyphicon glyphicon-remove"></span> ',array('controller'=>'puntoimprimes','action' => 'delete_asignado',$id_print,$id_punto),array('class'=> 'btn btn-danger btn-small','escape'=>false)); ?></span>
                        <?php echo $area_a['areas']['nombre']?>
                    </div>
                <?php endforeach; ?>
                <?php else:?>
                <div class="alert alert-info">No hay areas asigndas a esta impresora</div>
                <?php endif;?>
                </div>
            </div>
            
            
        </div>
    </div>
    
    
</div>