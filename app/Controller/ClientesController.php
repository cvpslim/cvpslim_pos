<?php
class ClientesController extends AppController{
     public $name='Clientes';
     public $components=array('Session');
     
 public function index() {
     $clientes = $this->Cliente->find('all');
     $this->set('clientes', $clientes);    
     }

public function add() {
		if (!empty($this->data)) {
			$this->Cliente->create($this->data);
			if ($this->Cliente->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                //$descuentos=$this->Cliente->Descuento->find('list',array('fields'=>array('Descuento.motivo' )));
                //$this->set('descuentos',compact('descuentos')); 
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Cliente->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cliente->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'view/'.$this->data['Cliente']['id']));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cliente->read(null, $id);
		}
                
                
                //$descuentos=$this->Cliente->Descuento->find('list',array('fields'=>array('Descuento.motivo' )));
                //$this->set('descuentos',compact('descuentos')); 
    }
    
    public function formCredito(){
        $this->layout="ajax";
        $id_cliente=$_POST['id'];
        $this->set("id_cliente", $id_cliente);
    }
    
    public function sendCredito(){
        $admin = AuthComponent::user('id');
        $id_cliente = $_POST['id_cliente'];
        $monto = $_POST['monto'];
        if(is_numeric($monto)){
            $this->Cliente->query("INSERT INTO creditos_cuenta_cliente (id_cliente, monto, fecha, usuario) VALUES ('$id_cliente','$monto', NOW(), '$admin');");
            $this->Cliente->query("UPDATE clientes SET credito = (credito+'$monto') WHERE id LIKE '$id_cliente'"); 
        }
//$this->Session->write('Station.carryout', $tipo);
        echo 'ok';
        $this->autoRender = false;
    }
    
    public function view($id = null) 
  {
    $this->Cliente->id = $id;

    if (!$this->Cliente->exists()) 
    {
      throw new NotFoundException(__('Usuário inválido'));
    }
    $this->set('consumos', $this->Cliente->query("SELECT * FROM consumos_cuenta WHERE id_cliente LIKE '$id'"));
    $this->set('creditos', $this->Cliente->query("SELECT creditos_cuenta_cliente.*, users.username FROM creditos_cuenta_cliente, users WHERE creditos_cuenta_cliente.usuario = users.id AND id_cliente LIKE '$id'"));
    $this->set('cliente', $this->Cliente->read(null, $id));
  }	
	
 
    
        
}
