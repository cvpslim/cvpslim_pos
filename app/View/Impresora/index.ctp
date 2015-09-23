
<div class="container">
    <h3><?php echo __('IMPRESION DE LA COMANDA') ?></h3>
    <div class="text-right"><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear nuevo'), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?></div>
    <br>
    <?php foreach ($impresoras as $impresora): ?>
    <div class="panel panel-primary">
        
        <div class="panel-heading">
            <div class="row-fluid">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xm-8 col-xs-8">
                    <span class="h4"><?php echo $impresora['Impresora']['lugar']; ?></span>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 col-xs-4 text-right">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ',array('action' => 'edit', $impresora['Impresora']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('action' => 'delete', $impresora['Impresora']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $impresora['Impresora']['lugar'])); ?>
            </div>
            </div>  
        </div>
        <div class="panel-body">
        
            <?php if (count($impresora['Puntoimprime'])>0):?>
        
        <h6>Impresoras</h6>
        <?php foreach ($impresora['Puntoimprime'] as $imprime): ?>
                    <div class="row-fluid" >
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 col-xs-4"><i class="glyphicon glyphicon-print"></i> <?php echo $imprime['nombre']; ?></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 col-xs-4"><?php echo $imprime['spooler']; ?></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 col-xs-4">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-cog"></span> ', array('controller'=>'puntoimprimes','action' => 'config',$imprime['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?>
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span> ',array('controller'=>'puntoimprimes','action' => 'delete', $imprime['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), 'Está seguro de que desea eliminar esta impresora?'); ?>
                        </div>
                    </div>
                <br>
        <?php endforeach; ?>
        <div><?php echo $this->Html->link('Agregar impresora','/puntoimprimes/add/'.$impresora['Impresora']['id'], array('class' => 'btn btn-success')); ?></div>
        <?php else: ?>
        <div class="text-danger">Area sin impresoras.</div>
        <div><?php echo $this->Html->link('Crear','/puntoimprimes/add/'.$impresora['Impresora']['id'], array('class' => 'btn btn-success')); ?></div>
        <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>