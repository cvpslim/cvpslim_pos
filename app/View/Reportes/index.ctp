<div class="estado view">
<div class="panel panel-primary">
    
  
    <div class="panel-heading"> <font size="+1"><b><?php echo __('Bienvenido a la parte  de reportes') ?></b></font></div>
    <div class="panel-footer">
        
        

	
</div>
    <div class="panel-body">
     <ul class="list-group">
         <table class="table table-striped">
             <tr> <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reportes de caja </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de consumo </span> ',array('action' => 'reporteconsumo'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas Totales </span> ',array('action' => 'ventatotales'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por Categoria </span> ',array('action' => 'ventaporcategorias'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         
         </tr>
         
        <tr> 
        
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por Sub-Categoria</span> ',array('action' => 'ventassubcategoria'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por Cliente</span> ',array('action' => 'ventasclientes'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
          </tr>
          
         
        <tr> <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por clase de comida</span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas con credit card </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por Sub-Categoria</span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas con Coupon </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
          </tr>
         
          
          <tr> <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Compras por personal</span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Ventas por cargo</span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de Descuentos</span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de Anulaciones </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
          </tr>
          
           <tr> <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de cliente </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
        <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de Personal con sus datos </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
         <td><?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"> Reporte de caja inicio  </span> ',array('action' => 'reporte1'),array('class'=> 'btn btn-primary','escape'=>false)); ?></td>
          </tr>
          
         </table>
     </ul>
    </div>

</div>

