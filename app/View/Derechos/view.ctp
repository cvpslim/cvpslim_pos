<div class="cuenta view"> 
<h2><?php echo __('Cuentas') ?></h2>
<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Detalle de las Cuentas') ?></b></font></div>
    <div class="panel-footer">

            <ul>
                <h3><?php echo __('Acciones') ?></h3>

                <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $cuenta['Cuenta']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?> 
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $cuenta['Cuenta']['id']), 
            array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $cuenta['Cuenta']['id'])); ?> 
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Listar </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 

            </ul>

    </div>
    <div class="panel-body">
     <ul class="list-group">
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Tipo Pago') ?>:</b></font></em>  <?php echo $cuenta['Cuenta']['tipo_pago']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Monto Asignado') ?> :</b></font></em><?php echo$cuenta['Cuenta']['monto_asignado']; ?></li>
          
     </ul>
    </div>
    
</div>
</div>

		