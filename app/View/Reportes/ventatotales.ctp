<h3><?php echo "Ventas total por dia";?></h3>
    <?php foreach ($ventatotales as $ventatotale):?>
   
<ul>  <li><b><?php echo "Fecha : ";?><?php echo $ventatotale['0']['fecha']?></b></li>
    <ul>
         <li><?php echo "Total por fecha : ";?><?php echo $ventatotale['0']['total'] ?></li>
    </ul>

   </ul>
    <?php endforeach;?>
