<div class="modal-content ancho_caja_anular">
    <div class="row-fluid">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><h4>Razon de la Anulacion ahora</h4></div>
        
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
            <label class="form" for="cant">Cant:</label>
            <select id="cant" name="cant">
                <?php for($i=1; $i<=$cant; $i++): ?>
                    <option class="h3"><?php echo $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>


<div class="caja_consumos_descuento">
    
    <div class="row-fluid">
        <?php 
            foreach ($razones as $razon):
            ?>
            <div class="btn-group col-lg-6 col-sm-6 nopadding" data-toggle="buttons">
            
            <label class="btn btn-default btn-block" onclick="setRazon('<?php echo $razon['anulacions']['id'] ?>', '<?php echo $id_consumo ?>');">
                <input  type="radio" name="razon" id="razon" autocomplete="off"> <?php echo $razon['anulacions']['motivo'] ?>
            </label>
            </div>
        <?php endforeach; ?>
        </div>
        
            
        
        
    
    
</div>
<div class="row-fluid modal-footer nopadding">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <button onclick="closePopUp();" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="anular_ok">
        &nbsp
    </div>
    
    
</div>

</div>
