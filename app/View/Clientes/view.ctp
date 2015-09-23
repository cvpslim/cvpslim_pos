<div class="cliente view">
 
<div class="panel panel-primary">
    
  
    <div class="panel-heading"><font size="+1"><b><?php echo __('Cliente') ?> </b></font> <?php echo $cliente['Cliente']['nombre']; ?> <?php echo $cliente['Cliente']['apellido']; ?></div>

   <div class="panel-footer">
        
        
            <h4><?php echo __('Acciones') ?></h4>
            
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $cliente['Cliente']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?> 
           <?php echo $this->Html->link('<span class="glyphicon glyphicon-remove-circle"> Eliminar</span> ',array('action' => 'delete', $cliente['Cliente']['id']), 
        array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de que desea eliminar %s?', $cliente['Cliente']['id'])); ?> 
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?> 
            
        
    
    </div> 
    <div class="panel-body">
        
        <div class="row-fluid">
            
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-content">
                    <h4 class="text-center">Datos personales</h4>
                    <div class="h5"><b>Nombre: </b> <?php echo $cliente['Cliente']['nombre']; ?></div>
                    <div class="h5"><b>Apellido: </b> <?php echo $cliente['Cliente']['apellido']; ?></div>
                    <div class="h5"><b>Fecha Nacimiento: </b> <?php echo $fecha = ($cliente['Cliente']['fecha_nac'] != '') ? $cliente['Cliente']['fecha_nac'] : 'No definido' ; ?></div>
                    <div class="h5"><b>Direccion: </b> <?php echo $cliente['Cliente']['direccion']; ?></div>
                    <div class="h5"><b>Telefono1:</b> <?php echo $cliente['Cliente']['telefono1']; ?></div>
                    <div class="h5"><b>Telefono2:</b> <?php echo $cliente['Cliente']['telefono2']; ?></div>
                    <div class="h5"><b>Telefono3:</b> <?php echo $cliente['Cliente']['telefono3']; ?></div>
                    <div class="h5"><b>Email1</b> <?php echo $cliente['Cliente']['email1']; ?></div>
                    <div class="h5"><b>Email2</b> <?php echo $cliente['Cliente']['email2']; ?></div>
                    <div class="h5"><b>Email3</b> <?php echo $cliente['Cliente']['email3']; ?></div>
                    <div class="h5"><b>Email2</b> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-content">
                <h4 class="text-center">Datos de cuenta</h4>
                
                <div class="h5"><b>Razon Social:</b> <?php echo $cliente['Cliente']['razon_social']; ?></div>
                    <div class="h5"><b>NIT:</b> <?php echo $cliente['Cliente']['nit']; ?></div>
                    <div class="h5"><b>Tipo cliente: <?php echo $cliente['Cliente']['tipo']; ?></div>
                    <div class="h5"><b>Monto credito</b> <?php echo $cliente['Cliente']['credito']; ?></div>
                    <div class="h5"><b>Porcentaje de descuento:</b> <?php echo $cliente['Cliente']['porcentaje_descuento']; ?> %</div>
            </div>
            
        </div>
        
        
        <p></p>
        
        
        <div class="row-fluid">
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-content">
                <h5 class="text-center text-info">Historial creditos</h5>
                <?php if(count($creditos)>0):?>
                <table class="table table-responsive">
                    <thead>
                    <th>Fecha hora</th>
                    <th>monto</th>
                    <th>Usuario</th>
                    </thead>
                    <tbody>
                        <?php foreach ($creditos as $credito):?>
                        <tr>
                            <td><?php echo $credito['creditos_cuenta_cliente']['fecha']; ?></td>
                            <td><?php echo $credito['creditos_cuenta_cliente']['monto']; ?></td>
                            <td><?php echo $credito['users']['username']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
                <?php else:?>
                <div>No hay registros</div>    
                <?php endif;?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-content">
                <h5 class="text-center text-info">Consumos de cuenta</h5>
                <?php if(count($consumos)>0):?>
                <table class="table table-responsive">
                    <thead>
                    <th>Fecha hora</th>
                    <th>monto</th>
                    
                    </thead>
                    <tbody>
                        <?php foreach ($consumos as $credito):?>
                        <tr>
                            <td><?php echo $credito['consumos_cuenta']['fecha']; ?> Bs.</td>
                            <td><?php echo $credito['consumos_cuenta']['monto']; ?> Bs.</td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
                <?php else:?>
                <div>No hay registros</div>    
                <?php endif;?>
            </div>
            
        </div>
        
    
    </div>
 
</div>
</div>




