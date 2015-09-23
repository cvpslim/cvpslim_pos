<h3><?php  echo " Venta por categorias";?></h3>
<?php $var="";
       $var1=""; ?>

 <?php foreach ($ventaporcats as $ventaporcat):?>
   
<ul> 
    <?php if($ventaporcat['categorias']['categoria']!=$var){?>
    <li><b><?php echo "Categoria : ";?><?php echo $ventaporcat['categorias']['categoria']?></b></li>
    <?php $var= $ventaporcat['categorias']['categoria']; }?>
    <ul>
        <?php if($ventaporcat['subcategorias']['nombre']!=$var1){?>
        
        <li><b><?php echo "Subcategoria : ";?><?php echo $ventaporcat['subcategorias']['nombre'] ?></b></li>
        <?php $var1= $ventaporcat['subcategorias']['nombre']; }?>
        <ul>
        
        <li><?php echo "producto : ";?><?php echo $ventaporcat['productos']['producto'] ?></li>
               <li><?php echo "precio : ";?><?php echo $ventaporcat['productos']['precio'] ?> </li>
          </ul>
    </ul>

   </ul>
    <?php endforeach;?>
