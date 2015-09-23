
<APPLET CODE="Imprimir.class" ARCHIVE="<?php echo $this->Html->url("/applets/Factura.jar"); ?>" 
        WIDTH=260 
        HEIGHT=70
        MAYSCRIPT>
 <PARAM name="url" VALUE="http://192.168.7.108/pos/files/facturas/<?php echo $archivo; ?>"> 
</APPLET>

