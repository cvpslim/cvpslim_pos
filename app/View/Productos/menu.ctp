<h3>Activar menu  </h3>
<div>
  <?php echo $this->Html->link('<span class="glyphicon glyphicon-upload"> Activar menu</span> ',array('controller'=>'productos','action' => 'actualizar',1), 
                                 array('class'=> 'btn btn-danger','escape'=>false), sprintf('Está seguro de actualizar el menu %s?',1)); ?> 
 </div>                                           
<div class="panel-footer">
 <?php echo " Al presionar el boton Activar menu aparecera las categorias y los productos activados   en la pantalla del POS  ";?>
</div>
            
        



                                       

