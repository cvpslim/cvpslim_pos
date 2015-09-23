<?php echo $this->Html->script('key_pad')?>
<?php echo $this->Html->css('teclado')?>

<div id="container_teclado">
 <input name="caja_codigo" id="caja_codigo_leters" type="text" class="form-control input-lg">
 <ul id="keyboard">
                <li class="symbol" onclick="addKeyBoard(1);"><span class="off">1</span></li>
		<li class="symbol" onclick="addKeyBoard(2);"><span class="off">2</span></li>
		<li class="symbol" onclick="addKeyBoard(3);"><span class="off">3</span></li>
	 	<li class="symbol" onclick="addKeyBoard(4);"><span class="off">4</span></li>
		<li class="symbol" onclick="addKeyBoard(5);"><span class="off">5</span></li>
		<li class="symbol" onclick="addKeyBoard(6);"><span class="off">6</span></li>
		<li class="symbol" onclick="addKeyBoard(7);"><span class="off">7</span></li>
		<li class="symbol" onclick="addKeyBoard(8);"><span class="off">8</span></li>
		<li class="symbol" onclick="addKeyBoard(9);"><span class="off">9</span></li>
		<li class="symbol" onclick="addKeyBoard(0);"><span class="off">0</span></li>
                <li class="bg-danger delete lastitem" onclick="backKeyBoard('-');"><div class="bg-danger">Borrar</div></li> 
                
                <li class="letter" onclick="addKeyBoard('q');">q</li>
	 	<li class="letter" onclick="addKeyBoard('w');">w</li>
		<li class="letter" onclick="addKeyBoard('e');">e</li>
	 	<li class="letter" onclick="addKeyBoard('r');">r</li>
		<li class="letter" onclick="addKeyBoard('t');">t</li>
		<li class="letter" onclick="addKeyBoard('y');">y</li>
	 	<li class="letter" onclick="addKeyBoard('u');">u</li>
		<li class="letter" onclick="addKeyBoard('i');">i</li>
		<li class="letter" onclick="addKeyBoard('o');">o</li>
		<li class="letter" onclick="addKeyBoard('p');">p</li>
                <li class="delete lastitem" onclick="NameCarryout();"><div class="bg-success">Enter</div></li>		
        <li class="empty"></li>
		<li class="letter" onclick="addKeyBoard('a');">a</li>
		<li class="letter" onclick="addKeyBoard('s');">s</li>
		<li class="letter" onclick="addKeyBoard('d');">d</li>
		<li class="letter" onclick="addKeyBoard('f');">f</li>
		<li class="letter" onclick="addKeyBoard('g');">g</li>
		<li class="letter" onclick="addKeyBoard('h');">h</li>
		<li class="letter" onclick="addKeyBoard('j');">j</li>
		<li class="letter" onclick="addKeyBoard('k');">k</li>
		<li class="letter" onclick="addKeyBoard('l');">l</li>
                <li class="letter" onclick="addKeyBoard('ñ');">ñ</li>
                <li class="return lastitem" onclick="addKeyBoard('-');"> - </li>	
        <li class="empty"></li>
        <li class="empty"></li>
		<li class="letter" onclick="addKeyBoard('z');">z</li>
		<li class="letter" onclick="addKeyBoard('x');">x</li>
		<li class="letter" onclick="addKeyBoard('c');">c</li>
		<li class="letter" onclick="addKeyBoard('v');">v</li>
		<li class="letter" onclick="addKeyBoard('b');">b</li>
		<li class="letter" onclick="addKeyBoard('n');">n</li>
		<li class="letter" onclick="addKeyBoard('m');">m</li>	
        <li class="lastitem" onclick="addKeyBoard('-');">-</li>        
        <li class="space lastitem" onclick="addKeyBoard(' ');">espacio</li>    		
      </ul>
</div>