<?php if(count($clientes)): ?>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente):?>
        <tr>
            <td><?php echo $cliente['clientes']['nombre'].' '.$cliente['clientes']['apellido']; ?></td>
            <td style="width: 100px;"><button class="btn btn-block btn-success"><i class="glyphicon glyphicon-usd"></i> Pagar</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p class="alert alert-info"> <i class="glyphicon glyphicon-info-sign"></i> Ningun resultado</p>
<?php endif; ?>

