<h3><?php  echo " Venta por clientes ";?></h3>
<?php $var="";
       $var1=""; ?>

 <?php foreach ($ventaclientes as $ventacliente):?>
   
<ul> 
  
        <li><b><?php echo "Cliente  : ";?><?php echo $ventacliente['clientes']['nombre'] ?></b></li>
        
        
        <li><?php echo "Importe : ";?><?php echo $ventacliente['facturas']['importe'] ?></li>
           
         

   </ul>
    <?php endforeach;?>