<div class="modal-body bg-info">
    <div class="modal-header">Seleccione Cantidad</div>
    <div class="form-group">
        <select class="form-control" id="form_cantidad">
            <?php for($i=$cantidad; $i>0; $i--): ?>
            <option class="form"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-success btn-block" onclick="setMoverCantidad();">OK</button>
    </div>
    
</div>
