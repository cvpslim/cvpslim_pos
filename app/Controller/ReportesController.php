<?php class ReportesController extends AppController{
    public $name='Reportes';
     
    
   public function index()
       {
       
       $this->layout="reportes";
       $this->loadModel('Colore');
       
   }
   public function reporte1()
    {
       
        $fecha = date("Y-d-m")."<br>";  
	$fecha2 =  date("Y-d-m", strtotime("+1 day")); 
        
 
        $this->layout="reportes";
        $this->loadModel('Colore');
        $datos=$this->Colore->query("SELECT restaurantes.nombre FROM  restaurantes");
        $this->set('datos',$datos);
        $monedas=$this->Colore->query("SELECT *
                                      FROM detallepos");
       
        $this->set('monedas',$monedas);
        
      $responsab=$this->Colore->query("SELECT personals.id,personals.nombre,roles.cargo
                                        from personals,roles,(SELECT asistencias.personal_id
									from asistencias
									WHERE (date(asistencias.clock_in)='$fecha' and HOUR(TIME(asistencias.clock_in))>=5) or (date(asistencias.clock_in)='$fecha2' and HOUR(TIME(asistencias.clock_in))>=5)
									GROUP BY asistencias.personal_id) tmp 
                                        WHERE personals.id = tmp.personal_id and personals.role_id=roles.id ");
        
//      print_r($responsab) ;
//      exit();
      $this->set('reps',$responsab);
        
        
         $jornadas=$this->Colore->query("SELECT jornadas.monto_inicial
                                            FROM jornadas
                                            WHERE jornadas.fecha=(select CURDATE())");
       $this->set('jords',$jornadas);
        
        
                
         $jornadas=$this->Colore->query("SELECT jornadas.monto_inicial
                                            FROM jornadas
                                            WHERE jornadas.fecha=(select CURDATE())");
        $this->set('jords',$jornadas);
        
       
        
        $aperturas=$this->Colore->query(" SELECT hora_inicio, fecha FROM  jornadas WHERE fecha='2014-09-24'");
        $this->set('apers',$aperturas);
        
        $motototal=$this->Colore->query("SELECT SUM(precio) as precio
                                        from consumos");

        $this->set('montos',$motototal);
        
       
        
        
 
        
        
        $fecha1 = date("Y-m-d")."<br>";  
	$fecha3 =  date("Y-m-d", strtotime("+1 day")); 
        
        
          $cajas=$this->Colore->query("SELECT  DISTINCT efectivos.id,efectivos.cambio,IFNULL(tmp.cantidad,0) as n1, IFNULL(efectivos.cambio*tmp.cantidad,0) as n2
                                        FROM efectivos LEFT JOIN (SELECT montopordias.efectivo_id,montopordias.cantidad,montopordias.created
                                        FROM montopordias
                                        WHERE (date(montopordias.created)='$fecha1' and HOUR(TIME(montopordias.created))>=5) or (date(montopordias.created)='$fecha3' and HOUR(TIME(montopordias.created))<=5))tmp on efectivos.id=tmp.efectivo_id , montopordias

                     
");
          
        
        $this->set('cajas',$cajas);
        
         $montototaldecajas=$this->Colore->query("SELECT  SUM(IFNULL(efectivos.cambio*tmp.cantidad,0)) as n3
                                    FROM efectivos LEFT JOIN (SELECT montopordias.efectivo_id,montopordias.cantidad
                                    FROM montopordias
                                    WHERE (date(montopordias.created)='$fecha1' and HOUR(TIME(montopordias.created))>=5) or (date(montopordias.created)='$fecha3' and HOUR(TIME(montopordias.created))>=5)
)tmp on efectivos.id=tmp.efectivo_id 
                                    
");
          
        
        $this->set('montototaldecajas',$montototaldecajas);
        
        
        
    }
   public function reporteconsumo()
    {
       $this->layout="reportes";
        $this->loadModel('Colore');
    
       
   }
   
public function procesa2(){
    print_r($_GET);
    
  echo $fecha1=$_GET['Fecha1'];
  echo $fecha2=$_GET['Fecha2'];

    
     $this->layout="reportes";
       $this->loadModel('Colore');
    
     $consumos=$this->Colore->query("SELECT  productos.nombre,productos.precio
                                    from consumos,productos,pedidos
                                    WHERE ((DATE(consumos.fecha)='$fecha1' and HOUR(TIME(consumos.fecha))>=5) OR (DATE(consumos.fecha)='$fecha2' and HOUR(TIME(consumos.fecha))<=5)) AND productos.nombre=consumos.producto  and pedidos.id=consumos.pedido_id
                                        ");

        $this->set('consumos',$consumos);
        
        
        $totals=$this->Colore->query("SELECT SUM(tmp.precio) as p
                                                FROM (SELECT productos.precio
						FROM consumos,productos,pedidos
						WHERE  consumos.producto=productos.nombre and consumos.pedido_id=pedidos.id) tmp ");

        $this->set('totales',$totals);
        
        $productomasvendidos=$this->Colore->query("SELECT productos.nombre,productos.precio
                                                        from  productos, (SELECT tmp.producto,MAX(tmp.k)
							from  (SELECT consumos.producto,COUNT(consumos.producto) as k
							FROM consumos

							GROUP BY consumos.producto) tmp
							GROUP BY tmp.producto) tmp1
                                                        WHERE tmp1.producto=productos.nombre ");

        $this->set('productomasvendidos',$productomasvendidos);
        
      
	}
  
 public function ventatotales()
    {
       $this->layout="reportes";
       $this->loadModel('Colore');
       $ventatotales=$this->Colore->query("SELECT date(consumos.fecha) as fecha ,SUM(consumos.precio) as total 
                                                    from consumos ,(SELECT DISTINCT consumos.fecha 
                                                    FROM consumos) tmp
                                                    WHERE tmp.fecha=consumos.fecha
                                                    GROUP BY consumos.fecha
                                                    ORDER BY consumos.fecha asc
                                                    ");
     

        $this->set('ventatotales',$ventatotales);
    
       
   }
   
   public function ventaporcategorias()
    {
       $this->layout="reportes";
       $this->loadModel('Colore');
       $ventaporcats=$this->Colore->query("SELECT productos.nombre as producto, subcategorias.nombre,categorias.nombre as categoria,productos.precio
                                            from productos,consumos,pedidos , subcategorias, categorias 
                                            where productos.id=consumos.id and pedidos.id=consumos.pedido_id and subcategorias.id=productos.subcategoria_id and categorias.id=subcategorias.categoria_id
                                            ORDER BY  productos.nombre ASC ");

       

        $this->set('ventaporcats',$ventaporcats);
    
      
   }
        public function ventassubcategoria()
           {
          $this->layout="reportes";
        $this->loadModel('Colore');
       $ventaporsubs=$this->Colore->query("SELECT productos.nombre,productos.precio, subcategorias.nombre
                                            from productos,consumos,pedidos , subcategorias
                                            where productos.id=consumos.id and pedidos.id=consumos.pedido_id and subcategorias.id=productos.subcategoria_id
                                             ");
       
       

        $this->set('ventaporsubs',$ventaporsubs);
        }
        
        public function ventasclientes()
           {
          $this->layout="reportes";
            $this->loadModel('Colore');
            $ventaclientes=$this->Colore->query("SELECT clientes.nombre,facturas.importe
                                                FROM clientes,facturas
                                                WHERE clientes.id=facturas.nit_cliente
                                                 ");
           
       
       

        $this->set('ventaclientes',$ventaclientes);
        }
        
        
}

