<?php echo $this->Html->script('pay-functions')?>
<?php if($splits > 0): ?>
<form onsubmit="return false;" class="form" name="form_pay" id="form_pay">
    <input type="hidden" name="literal" value="<?php echo $literal ?>" id="literal">
<table class="table" style="background: #000">
    <tr>
        <td>
            <div class="pay-panel-uno">
                <div class="row">
                    <div class="col-md-12">
                        <div class="h3 text text-center text-hide">Total: <span id="total_cancelar"><?php echo $total ?></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input id="cash" size="15" maxlength="5" class="input input-lg bg-success" value="0" type="text">
                    </div>
                </div>
                
            </div>
            <div class="pay-panel-dos">
                <div class="row">
<!--                    <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-block btn-danger btn-lg">EXACT</button></div>
                    <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-block btn-danger btn-lg">NEXT</button></div>
                    <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-block btn-danger btn-lg">ACCOUNT</button></div>-->
                    
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(1)">$1</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(5)">$5</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(10)">10$</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(20)">20$</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(50)">$50</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(100)">$100</button></div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(0.01)">.01</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(0.05)">.05</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(0.10)">.10</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(0.25)">.25</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-default btn-lg" onclick="cashAdd(0.50)">.50</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><button class="btn btn-block btn-danger btn-lg" onclick="cashClear()">Limpiar</button></div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pay-panel-uno">
                <div class="row nopadding">
                    <div class="col-md-12"><input size="15" maxlength="5" class="input input-lg bg-success" name="cc_1" id="cc_1" type="text" value="0"></div>
                </div>
                <div class="row nopadding">
                    
                    <div class="col-md-12">
                        <input size="15" maxlength="5" class="input input-lg bg-success" onclick="getPadPayCC('dolar')" name="dolar" id="dolar" type="text" value="0">
                        <div id="cont_tipo_cambio" style="visibility: hidden;" class="input-group input-group-sm col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <span class="input-group-addon" id="sizing-addon3">Bs.</span>
                            <input size="15" maxlength="5"  type="text" disabled="" class="form-control" name="cc_2" id="cc_2" value="0" placeholder="Username" aria-describedby="sizing-addon3">
                    </div>
                    </div>
                    
                    </div>
                </div>
            </div>
            <div class="pay-panel-dos">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 nopadding"><button onclick="getPadPayCC('cc_1');" class="btn btn-block btn-warning  btn-lg">MANUAL CC #1</button></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopadding"><button onclick="clearCampo('cc_1');" class="btn btn-block btn-danger  btn-lg">Limpiar</button></div>
                </div>
                <div class="row">
                    <div class="btn-group" data-toggle="buttons">
                        <?php
                        $marca = true;
                        foreach ($monedas as $moneda):
                        ?>
                        <label class="btn btn-lg btn-default <?php if($marca) echo "active"; ?>">
                            <input onchange="actualizarPagar();" type="radio" name="moneda" value="<?php echo $moneda['tipo_cambios']['valor'] ?>" autocomplete="off" <?php if($marca) echo "checked"; ?>><?php echo $moneda['moneda1s']['label'] ?> <?php echo $moneda['tipo_cambios']['valor'] ?>
                        </label>
                        <?php 
                        $marca = false;
                        endforeach;
                        ?>
                        
                        
   
                    </div>
                    
<!--                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 nopadding">opciones  dos</div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopadding">opciones monedas</div>-->
<!--                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 nopadding"><button onclick="getPadPayCC('cc_2');" class="btn btn-block btn-warning  btn-lg">MANUAL CC #2</button></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopadding"><button onclick="clearCampo('cc_2');" class="btn btn-block btn-danger  btn-lg">Limpiar</button></div>-->
                
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pay-panel-uno">
                <div class="row nopadding">
                    <div class="col-md-12"><input size="15" maxlength="5" class="input input-lg bg-success" type="text" name="check" id="check" value="0"></div>
                </div>
                <div class="row nopadding">
                    <div class="col-md-12 "><input size="15" maxlength="5" class="input input-lg bg-success" type="text" name="cupon" id="cupon" value="0"></div>
                </div>
                
            </div>
            <div class="pay-panel-dos">
                
                <div class="row">
                    <div class="col-md-10 col-xs-10 col-sm-10 ">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadding"><button onclick="getPadPayCC('check');" class="btn btn-block btn-default  btn-lg">Cheque</button></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button onclick="clearCampo('check');" class="btn btn-block btn-danger  btn-lg">Limpiar</button></div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadding"><button onclick="getPadPayCC('cupon');" class="btn btn-block btn-default  btn-lg">Cupones</button></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button onclick="clearCampo('cupon');" class="btn btn-block btn-danger  btn-lg">Limpiar</button></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2 col-sm-2">  
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pay-panel-uno">
                <div class="row nopadding">
                    <div class="col-md-12"><input size="15" maxlength="5" class="input input-lg bg-success" type="text" name="check" id="check" value="0"></div>
                </div>
            </div>
            <div class="pay-panel-dos">
                
                <div class="row">
                    
                    <div class="col-md-10 col-xs-10 col-sm-10 ">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8 nopadding"><button onclick="PayCuentaCliente();" class="btn btn-block btn-default  btn-lg">Cuenta Cliente</button></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-block btn-danger  btn-lg">Limpiar</button></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2 col-sm-2">  
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pay-panel-uno">
                <input id="cambio" name="cambio" value="1" type="hidden">
                <input size="17" id="por_pagar" value="Deuda <?php echo $total ?>" maxlength="5" class="input input-lg alert alert-danger" type="text">
                <input size="17" id="por_pagar" value="Total <?php echo $total ?>" maxlength="5" class="input input-lg bg-warning disabled" type="text">
                    
            </div>
            <div class="pay-panel-dos">
                <div class="row">
                    <div class="col-md-6 nopadding"><button class="btn btn-block btn-danger btn-lg" onclick="payThisUpLater();">Finalizar mas tarde</button></div>
                    <div class="col-md-6 nopadding"><button class="btn btn-block btn-success btn-lg" onclick="datosFactura();">Finalizar y cerrar</button></div>
                </div>
                
            </div>
        </td>
    </tr>
</table>
</form>
<div class="capa_pad_numeric">
</div>
<?php else: ?>
<?php echo $this->element('btn_cerrar_pop_up')?>
<div class="panel">
    <div class="panel-heading">
        <h3>Mesa sin consumos</h3>
    </div>
    <div class="panel-body text-center">
        <button class="btn btn-lg btn-danger" onclick="LiberarMesa();">Liberar Mesa</button>
    </div>
    <div class="panel-footer">
        <p class="text text-muted text-center">Pude dejar libre la mesa</p>
    </div>
    
</div>
<?php endif; ?>