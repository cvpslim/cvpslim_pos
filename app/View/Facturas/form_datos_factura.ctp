<div class="modal-content">
    <div class="modal-body ancho_caja_anular">
        <form onsubmit="generarFactura(); return false">
    <div class="text-center"><h4>DATOS DE FACTURA</h4></div>
        <div class="form-group">
            <label for="">CI/NIT:</label>
            <input type="text" name="nit" id="nit" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <input type="hidden" name="total" value="<?php echo $total ?>" id="total" class="form-control">
            <input type="hidden" name="cambio"  value="<?php echo abs($cambio) ?>" id="cambio" class="form-control">
            <input type="hidden" name="literal"  value="<?php echo $literal ?>" id="literal" class="form-control">
        </div>
    
    <div class="form-group text-center" id="boton_factura">
        <input type="submit" value="Generar factura" class="btn btn-lg btn-block btn-primary">
    </div>
        
    
    </form>
        
    </div>
    
</div>