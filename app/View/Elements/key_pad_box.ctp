<div class="container-fluid">
                    <div class="row">
                        <div class="form-group has-success input-lg">
                            <input type="password" class="form-control" id="caja_codigo">
                        </div>
                    </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(7);">7</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(8);">8</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(9);">9</button></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(4);">4</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(5);">5</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(6);">6</button></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(1);">1</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(2);">2</button></div>
                          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(3);">3</button></div>
                      </div>
                      <div  class="row">
                          <div  class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"><button class="btn btn-primary btn-lg btn-block" onclick="addKey(0);">0</button></div>
                      </div>
<?php echo $this->Html->script('key_pad_box')?>