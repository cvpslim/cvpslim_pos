<html>
  <head><title>EJemplo de paginación</title></head>
  <body>
  <table>
    <tr>
      <td>nombre</td>
      <td>precio</td>
      <td>Telefono</td>
    </tr>
<?php
// Si no hay datos a mostrar
if(empty($productos)) { ?>
    <tr>
      <td colspan="3">No hay datos que mostrar</td>
    </tr>
<?php
// Si hay datos:
} else {

// Mostramos cada uno de los datos
// encontrados
  foreach($productos as $i=>$producto) {
?>
    <tr>
      <td><?php echo $producto['Producto']['nombre']; ?></td>
      <td><?php echo $producto['Producto']['precio']; ?></td>
     
    </tr>
    
<?php 
  } // Fin foreach
} // Fin Hay datos ?>
<!--// POR ULTIMO CREAMOS LOS VINCULOS DE NAVEGACION //-->
<p align="center">
<?php
// Si no estamos en la primera p&#225;gina
// Y hay mas de dos p&#225;ginas
// mostramos el vinculo "Primera"
if(($paginaActual>1) && ($totalPaginas>2)) { ?>
  [<?php echo $html->link("Primera","/productos/listar/1"); ?>]
<?php
}
?>
<?php
// Si no estamos en la primera p&#225;gina
// mostramos el vinculo "Anterior"
if($paginaActual>1) { ?>
  [<?php echo $html->link("Anterior","/productos/listar/".($paginaActual-1)); ?>]
<?php
}
?>
<?php
// Si no estamos en la &#250;ltima p&#225;gina
// mostramos el vinculo "Siguiente"
if($paginaActual<$totalPaginas) { ?>
  [<?php echo $html->link("Siguiente","/productos/listar/".($paginaActual+1)); ?>]
<?php
}
?>
<?php
// Si no estamos en la ultima pagina
// Y hay mas de dos p&#225;ginas
// mostramos el vinculo "Ultima"
if(($paginaActual<$totalPaginas) && ($totalPaginas>2)) { ?>
  [<?php echo $html->link("&#218;ltima","/productos/listar/".$totalPaginas); ?>]
<?php
}
?><br />
<?php
// Si hay mas de una p&#225;gina entonces
// mostramos la p&#225;gina actual
if($totalPaginas>1)
?>
  Página <?php echo $paginaActual ?> de <?php echo $totalPaginas ?>;
<?php
?>
</p>
  </table>
  </body>
</html>