
<h2>Reporte de caja </h2>
<table>
<?php echo "Caja Report";?>
<?php foreach ($datos as $dato):?>
    <tr>
    <td><?php echo $dato['restaurantes']['nombre'];?></td>
    </tr>     
<?php endforeach;?>
        
    <tr>
    <th><?php echo "Control de la caja ";?></th>
    </tr> 
    
    
    <tr> 
        <td><?php $sdate=date("d")."/".date("m")."/".date("Y");
        echo "$sdate";
        ?></td>
        
        <td><?php 
        echo " ; ";?></td>
         <td><?php 
        echo $hora= date ("h:i:s");?></td>
        
        </tr>
    
  


</table>


<table>
  
  <tr>
        <th><?php echo " ----Responsable ----- ";?></th>
    </tr>
    
    
    <?php foreach ($reps as $rep):?>
<tr>
    <td><?php echo $rep['roles']['cargo']?></td>
    <td><?php echo ":"?></td>
    <td><?php echo $rep['personals']['nombre']?></td>
</tr>

<?php endforeach;?>  
<tr>
    <th><?php echo " ----Detalle -------- ";?></th>
    
</tr>

<?php foreach ($monedas as $moneda):?>
<tr>
    <td><?php echo $moneda['detallepos']['nombre']?></td>
    <td><?php echo ":"?></td>
    <td><?php echo "0"?></td>
</tr>
<?PHP endforeach;?>
<tr>
        <th><?php echo " ----CAJA INICIO----- ";?></th>
    </tr>
    
    
    <?php foreach ($jords as $jord):?>
<tr>
    <td><?php echo "Caja Inicio"?></td>
    <td><?php echo ":"?></td>
    <td><?php echo $jord['jornadas']['monto_inicial']?></td>
</tr>

<?php endforeach;?>







<tr>
        <th><?php echo " ----------------------";?></th>
        
    </tr>
<tr>
        <th><?php echo " DETALLE DE CAJA ";?></th>
        
        
    </tr>
<tr>
        <th><?php echo " ----------------------";?></th>
        
    </tr>

<?php foreach ($cajas as $caja):?>
<tr>
     <td><?php echo $caja['0']['n1']?></td>
    <td><?php echo " X "?></td>
    <td><?php echo $caja['efectivos']['cambio']?></td>
    <td><?php echo " =  "?></td>
    
    <td><?php echo $caja['0']['n2']?></td>
   
</tr>
<?php endforeach;?>
<tr>
        <th><?php echo " ----------------------";?></th>
        
</tr>


<?php foreach ($montototaldecajas as $montototaldecaja):?>
<tr>
    <td><?php echo " Total "?></td>
     <td><?php echo $montototaldecaja['0']['n3']?></td>
    
</tr>

<?php endforeach;?>


<tr>
        <th><?php echo " ------------ Firmas conforme ----------";?></th>
        
</tr>



</table>

</table>



<br/>   
<br/>
<br/>

 
---------------- Conforme ----------<P>
<br/>   
<br/>
<br/>

----------------------------- <P> nombre del cajero <P>
    
<br/>   
<br/>  
---------------------------------------- <P> use el reverso para sus observaciones <P>
9tab(s) now open. 
