
<?php
//$as=0;
//$var=0;
//$i = 1;
//$n=5;
//while ($i <= $n):
//    $i++;
//    
//    foreach ($ids as $id):
//        $var=$id['personals']['pin'];
//    endforeach;
//    
//    if($var==0)
//    {
//        $var=7;
//        $i=11;
//    }
//    else
//    {
//        
//        $var=$var+1;
//    }
//    foreach ($ids as $id):
//    
//        if($var==$id['personals']['pin']){
//            $var=$var+1;
//            $n=$n+1;
//        }
//    else {
//     $i=11;
//// }
// 
//    endforeach;
//endwhile;
?>

<?php 
$as=0;
$var=0;
$i = 1;
$n=1;
while ($i <= $n):
    $i++;
 
$sd=rand(1,100)*10*rand(1,100);



foreach ($ids as $id):
   
        if($sd==$id['personals']['pin']){
            $sd=rand(1,100)*10*rand(1,100);
            $n=$n+1;
       }
       else {
       $i=11;
       }

endforeach;

endwhile;
?>

<div class="Pesonals form">
    <h2><?php echo __('Personal') ?></h2>
<div class=”actions”>

	<ul>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"> Atrás </span> ', array('action' => 'index'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
	</ul>
</div>
    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
<?php
echo $this->Form->create('Personal');

//echo $this->Form->input('ci',array('type' => 'text')),array('label' =>__('ci'));
echo $this->Form->input('ci',array('type' => 'text'),array('label' =>__('CI')));
 echo $this->Form->input('pin',array('type' => 'hidden','value' => $sd));
echo $this->Form->input('nombre',array('label' =>__('Nombre')));
echo $this->Form->input('paterno',array('label' =>__('Paterno')));
echo $this->Form->input('materno',array('label' =>__('Materno')));
echo $this->Form->input('telefono1',array('type' => 'text'),array('label' =>__('Telefono1')));
echo $this->Form->input('telefono2',array('type' => 'text'),array('label' =>__('Telefono2')));
echo $this->Form->input('telefono3',array('type' => 'text'),array('label' =>__('Telefono3')));
echo $this->Form->input('direccion',array('label' =>__('Direccion')));
echo $this->Form->input('email1',array('label' =>__('Email1')));
echo $this->Form->input('email2',array('label' =>__('Email2')));
echo $this->Form->input('email3',array('label' =>__('Email3')));
echo $this->Form->input('fecha_nacimiento',array('label' =>__('Fecha de Nacimiento'),'minYear'=>date('Y')-80,'maxYear'=>date('Y')-14));
echo $this->Form->input('sueldo',array("type"=>"text"),array('label' =>__('Sueldo')));
//echo $this->Form->input('fecha_nacimiento');
//echo $this->Form->input('fecha_ingreso');
echo $this->Form->input('role_id', array('options' => $roles),array('label' =>__('Rol')));

echo $this->Form->end('Guardar');
?>
   
</div>



