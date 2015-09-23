<div class="productos">
    
	<h2><?php echo __('Listado de Productos alfabeticamente') ?></h2>
<div class="row">
    <div class="col-md-8">
<div class="actions">
	
    <ul>    
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Crear '), array('action' => 'add'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Listar por orden de ingreso'), array('action' => 'index1'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
     
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('listar por categorias'), array('action' => 'listarporcategoria'),array('class'=> 'btn btn-primary','escape'=>false)); ?>
       
        <ul/>
        
</div>
    </div>
    <div class="col-md-4">
        
        <FORM  class="text-primary" ACTION="buscador" METHOD="GET"> 
        <INPUT  TYPE="text" NAME="texto" ><BR> 
        <INPUT class="search-query" TYPE="submit" VALUE="Buscador"> 
       </FORM>
    </div>
</div>
        
<div class="pagination">
    <ul>
     <li><?php echo $this->Html->link( " A ", array('action' => 'alfa',$a='A')); ?></li>
    <li><?php echo $this->Html->link( " B ", array('action' => 'alfa',$a='B')); ?></li>
    <li><?php echo $this->Html->link( " C ", array('action' => 'alfa',$a='C')); ?></li>
    <li><?php echo $this->Html->link( " D ", array('action' => 'alfa',$a='D')); ?></li>
    <li><?php echo $this->Html->link( " E ", array('action' => 'alfa',$a='E')); ?></li>
    <li><?php echo $this->Html->link( " F", array('action' => 'alfa',$a='F')); ?></li>
    <li><?php echo $this->Html->link( " G ", array('action' => 'alfa',$a='G')); ?></li>
    <li><?php echo $this->Html->link( " H ", array('action' => 'alfa',$a='H')); ?></li>
    <li><?php echo $this->Html->link( " I ", array('action' => 'alfa',$a='I')); ?></li>
    <li><?php echo $this->Html->link( " J ", array('action' => 'alfa',$a='J')); ?></li>
    <li><?php echo $this->Html->link( " K ", array('action' => 'alfa',$a='K')); ?></li>
    <li><?php echo $this->Html->link( " L ", array('action' => 'alfa',$a='L')); ?></li>
    <li><?php echo $this->Html->link( " M ", array('action' => 'alfa',$a='M')); ?></li>
    <li><?php echo $this->Html->link( " N ", array('action' => 'alfa',$a='N')); ?></li>
    <li><?php echo $this->Html->link( " O ", array('action' => 'alfa',$a='O')); ?></li>
    <li> <?php echo $this->Html->link( " P ", array('action' => 'alfa',$a='P')); ?></li>
    <li><?php echo $this->Html->link( " Q ", array('action' => 'alfa',$a='Q')); ?></li>
    <li><?php echo $this->Html->link( " R ", array('action' => 'alfa',$a='R ')); ?></li>
    <li><?php echo $this->Html->link( " S ", array('action' => 'alfa',$a='S')); ?></li>
    <li><?php echo $this->Html->link( " T ", array('action' => 'alfa',$a='T')); ?></li>
    <li><?php echo $this->Html->link( " U ", array('action' => 'alfa',$a='U')); ?></li>
    <li><?php echo $this->Html->link( " V ", array('action' => 'alfa',$a='V')); ?></li>
    <li><?php echo $this->Html->link( " W ", array('action' => 'alfa',$a='W')); ?></li>
    <li><?php echo $this->Html->link( " X ", array('action' => 'alfa',$a='X')); ?></li>
    <li><?php echo $this->Html->link( " Y ", array('action' => 'alfa',$a='Y')); ?></li>
    <li><?php echo $this->Html->link( " Z ", array('action' => 'alfa',$a='Z')); ?></li>
    </ul>
    </div>

</div>

