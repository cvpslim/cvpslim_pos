<?php echo $this->Html->script('jquery-1.11.1.min')?>
<div> 
    <table id="datatables" class="display"> 
        <thead> 
            <tr > 
                <th>Rut </th> 
                <th>Nombre </th> 
                <th>Apellido Paterno</th> 
                <th>Apellido Materno</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php foreach ($consumos as $row) { ?> 
            <tr style='cursor:pointer' class='desmarcado'> 
                <td><center><?=$row['Rut']?></center></td> 
        <td><center><?php echo $row['productos']['nombre']?></center></td> 
        <td><center><?php echo $row['productos']['precio']?></center></td> 
        <td><center><?php echo $row['productos']['precio']?></center></td> </tr> 
            <?php } ?> 
        <script type="text/javascript"> 
            $(".desmarcado").click(function(){ // recorremos todos los valores... 
                $(".desmarcado td").each(function(index){ alert($(this).text()); }); }); 
                </script> 
                
    
    </tbody> 
    </table> 
</div>