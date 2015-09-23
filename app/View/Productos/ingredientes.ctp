<table class="table table-striped">
		
	<?php foreach ($productos as $producto): ?>
	<tr>	
		<td><?php echo $producto['ingredientes']['nombre']; ?> </td>
        </tr>
	<?php endforeach; ?>
	</table>
