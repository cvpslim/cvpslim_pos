<div class="bg-info modal-body">
    <div class="form-group">
        <label for="monto_agregar">Monto Agregar</label>
        <input type="hidden" id="frm_id_cliente" value="<?php echo $id_cliente ?>">
        <input type="text"  size="20" id="frm_monto"/>
    </div>
    <div class="form-group">
        <button class="btn btn-success" onclick="agregarMontoCuenta(); return false">Agregar</button>
    </div>
</div>

