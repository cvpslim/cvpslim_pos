<div class="container-fluid">
        <h4>Transferir <span class="text-info small">Elija una opcion.</span></h4>
        <div id="transfer" class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button onclick="transferTable();" class="btn btn-warning btn-block btn-lg">Transferir a una mesa</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button onclick="TransferTron();" class="btn btn-warning btn-block btn-lg">Transferir  a un mesero</button>
                </div>
            </div>
        </div>
</div>
<?php echo $this->Html->script('transfer')?>