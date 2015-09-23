<p class="bg-danger text text-center" id="validacion_config"></p>
<div class="container-fluid">
                    <div class="row">
                        <div class="form-group has-success input-lg">
                            <input type="password" value='' class="form-control" id="caja_codigo_config">
                        </div>
                    </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(7);">7</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(8);">8</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(9);">9</button></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(4);">4</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(5);">5</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(6);">6</button></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(1);">1</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(2);">2</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(3);">3</button></div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKeyConfig(0);">0</button></div>
                      </div>          
</div>

<div class="row">
                <span  class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-danger btn-lg btn-block" onclick="clearInputConfig();">Limpiar</button></span>
                <span class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><button class="btn btn-success btn-lg btn-block" onclick="ConfigLogin();">OK</button></span>
</div>
<?php echo $this->Html->script('key_pad_config')?>