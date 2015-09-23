<div class="estado view">
<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de tipo de cambio') ?></b></font></div>
    <div class="panel-footer">
        
        <ul>
            <h3><?php echo __('Acciones') ?></h3>
            
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $estado['TipoCambio']['id']),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $estado['TipoCambio']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $estado['TipoCambio']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
            
        </ul>

	
</div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Moneda1') ?>:</b></font></em> <?php echo $estado['Moneda1']['moneda']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Moneda2') ?>:</b></font></em> <?php echo $estado['Moneda2']['moneda']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Valor') ?>:</b></font></em> <?php echo $estado['TipoCambio']['valor']; ?></li>
          
        </ul>
    </div>

</div>



		