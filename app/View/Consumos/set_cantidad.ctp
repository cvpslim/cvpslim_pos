<?php echo $this->Html->script('key_pad')?>
<?php echo $this->element('btn_cerrar_pop_up')?>
<div class="text text-center modal-body" >
    <span class="h3 text-primary">Ingrese cantidad</span>
    <br><br>
    <div class="numeric_pad">
        <div class="text-center">
            <input name="id" id="id" type="hidden" value="<?php echo $id?>">
            <input name="caja_codigo" id="caja_codigo" type="text" class="form-control input-lg">
        </div>
            <div class="block_vertical"><button onclick="clearInput();" class="numeric_button_vert">Clear</button></div>
            <div class="blockeado"><button onclick="addKey(3);" class="numeric_button">3</button></div>
            <div class="blockeado"><button onclick="addKey(2);" class="numeric_button">2</button></div>
            <div class="blockeado"><button onclick="addKey(1);" class="numeric_button">1</button></div>
            <div class="blockeado"><button onclick="addKey(6);" class="numeric_button">6</button></div>
            <div class="blockeado"><button onclick="addKey(5);" class="numeric_button">5</button></div>
            <div class="blockeado"><button onclick="addKey(4);" class="numeric_button">4</button></div>
            <div class="block_vertical"><button onclick="setCantidadProducto();" class="numeric_button_vert">Enter</button></div>
            <div class="blockeado"><button onclick="addKey(9);" class="numeric_button">9</button></div>
            <div class="blockeado"><button onclick="addKey(8);" class="numeric_button">8</button></div>
            <div class="blockeado"><button onclick="addKey(7);" class="numeric_button">7</button></div>
            <div class="blockeado"><button onclick="addKey('.');" class="numeric_button">.</button></div>
            <div class="block_horizontal"><button onclick="addKey(0);" class="numeric_button_land">0</button></div>
    </div>
</div>