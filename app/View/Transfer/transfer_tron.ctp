<div>Click al mesero que desea transferir</div> 
<p class="bg-danger text text-center" id="validacion"></p>
        <div class="row">
            <?php foreach ($users as $user): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
            <button class="btn btn-danger btn-lg btn-block" onclick="TranferToUser('<?php echo $user['personals']['id'] ?>');"><?php echo $user['personals']['nombre'] ?></button>
            </div>
            <?php endforeach; ?>
</div>