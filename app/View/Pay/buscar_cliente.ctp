<?php echo $this->Html->script('cuentas_cliente')?>
<div class="panel panel-primary">
  <div class="panel-heading">
      
      
      <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
              <h3 class="panel-title"><i class="glyphicon glyphicon-search"></i> Buscar Cliente</h3>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">
              <button onclick="payThisUpLater();" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></button>
          </div>
      </div>
  </div>
  <div class="panel-body">
      <p class="h3 text-center">BUSQUEDA</p>
      <div class="form-group">
          <input type="text" id="caja_codigo_leters" name="caja_codigo" class="form-control" onclick="ShowTeclado();">
      </div>
      <div id="teclado_search">
          here
      </div>
  </div>
  <div class="panel-footer">
        <i class="glyphicon glyphicon glyphicon-warning-sign"></i> El registro de clientes es por medio del panel de administracion
  </div>
</div>