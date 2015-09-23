<table>
<tr>
        <th><?php echo " ----------------- CONSUMOS  ------------------------";?></th>
        
    </tr>
    <tr>
        
        <th><?php echo " ---------------------------------------------------------------";?></th>
    </tr>
    <tr>
    
      <th><?php echo "PRODUCTO "?></th>
      <th><?php echo "PRECIO "?></th>
</tr>
    
<?php foreach ($consumos as $consumo):?>
    

<tr>
  
   
    <td><?php echo $consumo['productos']['nombre']?></td>
   
    <td><?php echo $consumo['productos']['precio']?></td>
</tr>

<?php endforeach;?>


<tr>
        <th><?php echo " TOTAL DE VENTAS ";?></th>
        
    </tr>


<?php foreach ($totales as $totale):?>
    

<tr>
  
   
    <td><?php echo $totale['0']['p']?></td>
   
    
</tr>

<?php endforeach;?>


<tr>
        <th><?php echo " Producto mas vendido ";?></th>
        
    </tr>
<tr>
        <th><?php echo " ----------------------";?></th>
        
</tr>



<?php foreach ($productomasvendidos as $productomasvendido):?>
<tr>
    <td><?php echo $productomasvendido['productos']['nombre']?></td>
   
</tr>
<?php endforeach;?>

</table>