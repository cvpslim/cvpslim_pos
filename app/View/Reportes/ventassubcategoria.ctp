<h3><?php  echo " Venta por Subcategorias";?></h3>
<?php $var="";
       $var1=""; ?>

 <?php foreach ($ventaporsubs as $ventaporsub):?>
   
<ul> 
   
   
        <?php if($ventaporsub['subcategorias']['nombre']!=$var1){?>
        
        <li><b><?php echo "Subcategoria : ";?><?php echo $ventaporsub['subcategorias']['nombre'] ?></b></li>
        <?php $var1= $ventaporsub['subcategorias']['nombre']; }?>
        <ul>
        
        <li><?php echo "producto : ";?><?php echo $ventaporsub['productos']['nombre'] ?></li>
               <li><?php echo "precio : ";?><?php echo $ventaporsub['productos']['precio'] ?> </li>
         
    </ul>

   </ul>
    <?php endforeach;?>
