<div class="Role">
	<h2><?php echo __('Restaurant') ?></h2>

	<table class="table table-striped">
		
	<?php foreach ($restaurantes as $restaurante): ?>
     
<div class="page-header">
        

     <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"> Editar</span> ',array('action' => 'edit', $restaurante['Restaurante']['id']),array('class'=> 'btn btn-warning','escape'=>false)); ?>
     
</di>
</div>
 <h3> Datos </h3>

	<tr>
<div class="panel-body">
     <ul class="list-group">
        
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Nombre') ?>: </b></font></em>  <?php echo $restaurante['Restaurante']['nombre']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono') ?>:</b></font></em><?php echo $restaurante['Restaurante']['telefono']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Telefono Movil') ?>:</b></font></em><?php echo $restaurante['Restaurante']['telefono movil']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Zona') ?>:</b></font></em><?php echo $restaurante['Restaurante']['zona']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Direccion') ?>:</b></font></em><?php echo $restaurante['Restaurante']['direccion']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Ciudad') ?>:</b></font></em><?php echo $restaurante['Restaurante']['ciudad']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('NIT') ?>:</b></font></em><?php echo $restaurante['Restaurante']['NIT']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('AutorizacionNro') ?>:</b></font></em><?php echo $restaurante['Restaurante']['AutorizacionNro']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Email') ?>:</b></font></em><?php echo $restaurante['Restaurante']['email']; ?></li>
          <li class="list-group-item"><em ><font size="+0,5"><b><?php echo __('Facebook') ?>:</b></font></em><?php echo $restaurante['Restaurante']['facebook']; ?></li>
    </ul>
    </div>
		
</tr>
	<?php endforeach; ?>
	</table>
</div>
