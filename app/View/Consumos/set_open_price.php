<?php echo $this->Html->script('key_pad')?>
<?php echo $this->Html->css('teclado')?>
<?php echo $this->element('btn_cerrar_pop_up')?>
<div id="container_teclado">
 <textarea id="write" rows="3" cols="60"></textarea>
 <ul id="keyboard">
        <li class="symbol"><span class="off">1</span></li>
		<li class="symbol"><span class="off">2</span></li>
		<li class="symbol"><span class="off">3</span></li>
	 	<li class="symbol"><span class="off">4</span></li>
		<li class="symbol"><span class="off">5</span></li>
		<li class="symbol"><span class="off">6</span></li>
		<li class="symbol"><span class="off">7</span></li>
		<li class="symbol"><span class="off">8</span></li>
		<li class="symbol"><span class="off">9</span></li>
		<li class="symbol"><span class="off">0</span></li>
        <li class="lastitem">-</li> 
        
        <li class="letter">q</li>
	 	<li class="letter">w</li>
		<li class="letter">e</li>
	 	<li class="letter">r</li>
		<li class="letter">t</li>
		<li class="letter">y</li>
	 	<li class="letter">u</li>
		<li class="letter">i</li>
		<li class="letter">o</li>
		<li class="letter">p</li>
        <li class="delete lastitem">borrar</li>		
		
        <li class="empty"></li>
		<li class="letter">a</li>
		<li class="letter">s</li>
		<li class="letter">d</li>
		<li class="letter">f</li>
		<li class="letter">g</li>
		<li class="letter">h</li>
		<li class="letter">j</li>
		<li class="letter">k</li>
		<li class="letter">l</li>
		<li class="return lastitem">enter</li>	
		
        <li class="empty"></li>
        <li class="empty"></li>
		<li class="letter">z</li>
		<li class="letter">x</li>
		<li class="letter">c</li>
		<li class="letter">v</li>
		<li class="letter">b</li>
		<li class="letter">n</li>
		<li class="letter">m</li>	
        <li class="lastitem">-</li>        
        
        <li class="space lastitem">espacio</li>
        
        	    		
      </ul>
</div>