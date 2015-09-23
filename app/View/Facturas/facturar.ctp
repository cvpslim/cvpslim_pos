<?php
App::import('Vendor','xtcpdf'); 
App::import('Vendor','CodigoControl'); 
App::import('Component', 'NumeroLiteralComponent');
//$theComponent = new NumeroLiteralComponent();
//$theComponent->yourMethod();


$nit_empresa = "10002200";
$razon_empresa = "The Dubliner";
$razon_empresa = "The Dubliner";
$nro_factura = "454";
$autorizacion='29040011007';
$fecha = date("d/m/Y");
$fecha_codigo = date("Ymd");
//$total = "250.00";
$COD_CONTROL = "";
$fecha_limite_emicion = date("31/12/2015");
//$nombre = "CASTILLO";
$nit = ($nit != '') ? $nit : "0";
$nombre = ($nombre != '') ? $nombre : "S N";
$AP_RS="A";
$CI_NIT=$nit;

//$qr_code = $nit_empresa.'|'.$razon_empresa.'|'.$nro_factura.'|'.$nro_autorizacion.'|'.$fecha.'|'.$total.'|'.$COD_CONTROL.'|'.$fecha_limite_emicion.'|'.$CI_NIT.'|'.$nombre;





$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, 0);
                $pdf->setFont('Helvetica', false, 8);
		//ancho,alto
		//espaciado_extra >>$se
		$se=0;
		$medidas=array(65,150);
		// add a page

		$N_Cliente= $AP_RS;

		$NIT_CI=$CI_NIT;

		$LITERAL=$literal;
		// Ejemplo de generacion


		
		$factura='1503';
		$nitci='4189179011';
		//$fecha='20070702';
		$monto=0;
		$llave='9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';
		//$CodigoControl = new CodigoControl($autorizacion, $factura, $nitci, $fecha, $monto, $llave);
		//$COD_CONTROL=$CodigoControl->generar();
		$F_LIMITE="10/06/2014";
		$pdf->AddPage('P',$medidas);

		

                // QRCODE,M : QR-CODE Medium error correction

		$pdf->Text(20, 5, 'THE DUBLINER');
		//$pdf->Text(18, 8, 'Point of Sale Orange');
		$pdf->Text(22, 11, 'Sucursal N° 1');

		//$pdf->setFont('Helvetica', false, 8);
		$pdf->Text(10, 15, 'Av. Ballivian N°890 - Zona Calacoto');
		$pdf->Text(22, 19, 'Telefono 2746779');
		$pdf->Text(23, 23, 'La Paz - Bolivia');
		//$pdf->setFont('Helvetica', false, 11);
		$pdf->Text(26, 27, 'FACTURA');
		//$pdf->setFont('Helvetica', false, 11);
		//$pdf->Text(23, 30, 'ORIGINAL');
		//$pdf->setFont('Helvetica', false, 9);

		$pdf->Text(0, 28, '      __________________________________');

		$pdf->Text(20, 32, 'NIT: '.$nit_empresa);
		$pdf->Text(17, 35, 'FACTURA N° '.$nro_factura);
		$pdf->Text(10, 38, 'AUTORIZACION N° '.$autorizacion);
		$pdf->Text(0, 40, '      __________________________________');
		$pdf->Text(18, 44, 'Fecha: ' .date('d/m/Y',time()));
		$pdf->Text(10, 47, 'Nombre: ' .$nombre);
		$pdf->Text(18, 50, 'NIT/CI: ' .$NIT_CI);
		$pdf->Text(0, 51, '_______________________________________');

                $pdf->setFont('Helvetica', false, 8);
		$pdf->Text(2, 56, 'CANT     CONCEPTO               P/U   TOTAL ');

		$pdf->Text(0, 58, '_______________________________________');
                
                
                
                $salto = 62;
                $parcial = 0;
                foreach ($consumos as $item) {
                    $pdf->Text(2, $salto, $item['consumos']['cantidad']);
                    $pdf->Text(6, $salto, $item['consumos']['producto']);
                    $pdf->Text(42 - (strlen($item['0']['precio'])), $salto, $item['0']['precio']);
                    
                    $parcial = ($item['0']['precio'] * $item['consumos']['cantidad']);
                    $monto += $parcial;
                    $pdf->Text(51, $salto, number_format($parcial, 2, '.', ''));
                    $salto += 3;
                }
                
                $CodigoControl = new CodigoControl($autorizacion, $factura, $nitci, $fecha_codigo, $monto, $llave);
		$COD_CONTROL=$CodigoControl->generar();

                $qr_code = $nit_empresa.'|'.$razon_empresa.'|'.$nro_factura.'|'.$autorizacion.'|'.$fecha.'|'.$total.'|'.$COD_CONTROL.'|'.$fecha_limite_emicion.'|'.$CI_NIT.'|'.$nombre;
                $pdf->Text(0, $salto, '_______________________________________');
                
                
                

		$pdf->Text(0, $salto, '_______________________________________');

		$pdf->Text(30, $salto+4, 'TOTAL Bs.: '.number_format($monto, 2, ".","").'.-');

		$pdf->Text(2, $salto+8, 'SON: '.$LITERAL.' Bs.');

		$pdf->Text(3, 12+$salto, ' CODIGO DE CONTROL: '.$COD_CONTROL);

		$pdf->Text(3, 16+$salto, ' FECHA LIMITE DE EMISION: '.$fecha_limite_emicion);
                //$pdf->Text(3, 18+$salto, ' ');


		$pdf->write2DBarcode($qr_code, 'QRCODE,M', 19, 20+$salto, 25, 25, false, 'N');//$style, 'N');

                //$pdf->Text(3, 22+$salto, ' ');
		$pdf->setFont('Helvetica', false, 8);

		$txt = "
		La reproduccion total o parcial y/o uso no autorizado de esta Nota Fiscal, constituye un delito a ser sancionado conforme a la Ley ";

		// print a block of text using Write()
		$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

		//Guardar archivos en el disco duro
		//$pdf->Output('factura.pdf', 'I'); 
                $nombre_archivo = date("Ymd-His")."factura.pdf";//$nombre.'-'.$nit.'-'.$fecha_codigo.'-factura.pdf';
		echo $pdf->Output("files/facturas/".$nombre_archivo, 'F');
                
                echo $nombre_archivo;
                exit();
?>

