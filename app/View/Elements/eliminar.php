<?php
require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
		
		$data = $_POST['data'];
                $foto = $_POST['foto'];
                $gps = $_POST['gps'];
		$fecha_registro = $_POST['fecha_registro'];

		$file_path = "uploads/";
     
   		$file_path = $file_path .rand(1111,9999). basename( $_FILES['archivo']['name']);
   			if(move_uploaded_file($_FILES['archivo']['tmp_name'], $file_path)) {
       			echo "success";
   			} else{
       			echo "fail";
   			}
		

	$db->sincronizar($data, $file_path, $gps, $fecha_registro);

?>