<?php echo $this->Html->script('key_pad')?>
<?php echo $this->Html->css('teclado')?>
<?php echo $this->element('btn_cerrar_pop_up')?>
<h3 class="text-center text-primary">Escriba una descripcion</h3>
<div id="container_teclado">
 <input name="caja_codigo" id="caja_codigo" type="text" class="form-control input-lg">
 <ul id="keyboard">
                <li class="symbol" onclick="addKey(1);"><span class="off">1</span></li>
		<li class="symbol" onclick="addKey(2);"><span class="off">2</span></li>
		<li class="symbol" onclick="addKey(3);"><span class="off">3</span></li>
	 	<li class="symbol" onclick="addKey(4);"><span class="off">4</span></li>
		<li class="symbol" onclick="addKey(5);"><span class="off">5</span></li>
		<li class="symbol" onclick="addKey(6);"><span class="off">6</span></li>
		<li class="symbol" onclick="addKey(7);"><span class="off">7</span></li>
		<li class="symbol" onclick="addKey(8);"><span class="off">8</span></li>
		<li class="symbol" onclick="addKey(9);"><span class="off">9</span></li>
		<li class="symbol" onclick="addKey(0);"><span class="off">0</span></li>
                <li class="lastitem" onclick="addKey('-');">-</li> 
                
                <li class="letter" onclick="addKey('q');">q</li>
	 	<li class="letter" onclick="addKey('w');">w</li>
		<li class="letter" onclick="addKey('e');">e</li>
	 	<li class="letter" onclick="addKey('r');">r</li>
		<li class="letter" onclick="addKey('t');">t</li>
		<li class="letter" onclick="addKey('y');">y</li>
	 	<li class="letter" onclick="addKey('u');">u</li>
		<li class="letter" onclick="addKey('i');">i</li>
		<li class="letter" onclick="addKey('o');">o</li>
		<li class="letter" onclick="addKey('p');">p</li>
                <li class="delete lastitem" onclick="backKey();">borrar</li>		
        <li class="empty"></li>
		<li class="letter" onclick="addKey('a');">a</li>
		<li class="letter" onclick="addKey('s');">s</li>
		<li class="letter" onclick="addKey('d');">d</li>
		<li class="letter" onclick="addKey('f');">f</li>
		<li class="letter" onclick="addKey('g');">g</li>
		<li class="letter" onclick="addKey('h');">h</li>
		<li class="letter" onclick="addKey('j');">j</li>
		<li class="letter" onclick="addKey('k');">k</li>
		<li class="letter" onclick="addKey('l');">l</li>
                <li class="letter" onclick="addKey('ñ');">ñ</li>
                <li class="return lastitem" onclick="setTypeWriter();">enter</li>	
        <li class="empty"></li>
        <li class="empty"></li>
		<li class="letter" onclick="addKey('z');">z</li>
		<li class="letter" onclick="addKey('x');">x</li>
		<li class="letter" onclick="addKey('c');">c</li>
		<li class="letter" onclick="addKey('v');">v</li>
		<li class="letter" onclick="addKey('b');">b</li>
		<li class="letter" onclick="addKey('n');">n</li>
		<li class="letter" onclick="addKey('m');">m</li>	
        <li class="lastitem" onclick="addKey('-');">-</li>        
        <li class="space lastitem" onclick="addKey(' ');">espacio</li>    		
      </ul>
</div>