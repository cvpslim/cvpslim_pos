<?php
App::import('Vendor','xtcpdf'); 
App::import('Vendor','CodigoControl'); 
//$tcpdf = new XTCPDF();

$AP_RS="A";
$CI_NIT=0;
$COD_CONTROL = "45-678-ft466";

$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setFont('Helvetica', false, 8);



		//ancho,alto
		//espaciado_extra >>$se
		$se=0;
		$medidas=array(65,500);
		// add a page

		$N_Cliente= $AP_RS;

		$NIT_CI=$CI_NIT;

		$LITERAL="CIENTO CINCUENTA 00/100 Bs.";
		// Ejemplo de generacion


		$autorizacion='29040011007';
		$factura='1503';
		$nitci='4189179011';
		$fecha='20070702';
		$monto='2500';
		$llave='9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';
		$CodigoControl = new CodigoControl($autorizacion, $factura, $nitci, $fecha, $monto, $llave);
		$COD_CONTROL=$CodigoControl->generar();
		$F_LIMITE="10/06/2014";
		$pdf->AddPage('P',$medidas);

		

                // QRCODE,M : QR-CODE Medium error correction

		$pdf->Text(25, 5, 'POS S.A.');
		$pdf->Text(18, 8, 'Point of Sale Orange');
		$pdf->Text(16, 11, 'Sucursal N° 1 -SFC 002');

		$pdf->setFont('Helvetica', false, 6);
		$pdf->Text(14, 15, 'Av. Ballivian N°890 - Zona Calacoto');
		$pdf->Text(22, 17, 'Telefono 2746779');
		$pdf->Text(23, 19, 'La Paz - Bolivia');
		$pdf->setFont('Helvetica', false, 10);
		$pdf->Text(22, 22, 'FACTURA');
		$pdf->setFont('Helvetica', false, 9);
		$pdf->Text(23, 26, 'ORIGINAL');
		$pdf->setFont('Helvetica', false, 8);

		$pdf->Text(0, 28, '       __________________________________');

		$pdf->Text(20, 32, 'NIT: '.$nitci);
		$pdf->Text(17, 35, 'FACTURA N° '.$factura);
		$pdf->Text(10, 38, 'AUTORIZACION N° '.$autorizacion);
		$pdf->Text(0, 40, '       __________________________________');
		$pdf->Text(18, 44, 'FECHA: '.date('d/m/Y',time()));
		$pdf->Text(10, 47, 'SEÑOR(ES): '.$N_Cliente);
		$pdf->Text(18, 50, 'NIT/CI: '.$NIT_CI);
		$pdf->Text(0, 51, '_______________________________________');

                $pdf->setFont('courier', false, 8);
		$pdf->Text(2, 56, '   CANT  CONCEPTO   PRECIO   TOTAL ');

		$pdf->Text(0, 58, '_______________________________________');
                
                $salto = 62;
                for($i=0; $i<=30;$i++){
                    $pdf->Text(2, $salto, '    2    POLERAS    75       150');
                    $salto += 2.5;
                }
                $pdf->Text(0, $salto, '_______________________________________');
                
                
                $html = '<table border = "2">
    <tr>
        <td>2</td>
        <td>cinco productos</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>producto tres</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6</td>
        <td>producto</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7</td>
        <td>prod uno</td>
        <td></td>
        <td></td>
    </tr>
</table>';
                
                $pdf->writeHTML($html, true, 0, true, 0);
                

		$pdf->Text(0, $salto, '_______________________________________');

		$pdf->Text(30, $salto+4, 'TOTAL Bs.: '.$monto.'.-');

		$pdf->Text(2, $salto+8, '   SON: '.$LITERAL.' Bs.');

		$pdf->Text(3, 12+$salto, '   CODIGO DE CONTROL: '.$COD_CONTROL);

		$pdf->Text(4, 16+$salto, '   FECHA LIMITE DE EMISION: '.$F_LIMITE);



		$pdf->write2DBarcode($COD_CONTROL, 'QRCODE,M', 17, 20+$salto, 30, 30, false, 'N');//$style, 'N');

		$pdf->setFont('Helvetica', false, 6);

		$txt = "
		La reproduccion total o parcial y/o uso no autorizado de esta Nota Fiscal, constituye un delito a ser sancionado conforme a la Ley ";

		// print a block of text using Write()
		$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

		//Guardar archivos en el disco duro
		//$pdf->Output('factura.pdf', 'I');
		echo $pdf->Output('factura.pdf', 'I');
                exit();
?>


<button>imprimir</button>

<table border = "2" style = "width: 100%; padding: 0px">