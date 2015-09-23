<div>
    <div class="split_panel_uno" id="split_panel_uno">
        <div class="text text-center" id="prueba">
            <button class="btn btn-success" onclick="moveHere('<?php echo $nuevo_split ?>');">MOVER A NUEVO SPLIT</button>    
        </div>
    </div>

    <div class="split_panel_dos" id="split_panel_dos">
       <?php echo $this->element('split_list', array("splits"=>$splits)); ?>
    </div>
</div>