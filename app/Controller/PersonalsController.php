<?php
class PersonalsController extends AppController{
    public $name='Personals';
    public $components=array('Session');
 public $helpers=array('Form');
 public function index() {
     $personals = $this->Personal->query('SELECT personals.*, clientes.personal_id FROM personals LEFT JOIN clientes ON personals.id = clientes.personal_id order by personals.paterno');
     //print_r($personals); 
    //$personals = $this->Personal->find('all');
     $this->set('personals', $personals);
     
}

public function add() {
		if (!empty($this->data)) {
			$this->Personal->create($this->data);
			if ($this->Personal->save()) {
                            //$personal_id = $this->Pedido->id;
                               
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar, verifique los datos e intente nuevamente. '));
			}
		}
                $roles=$this->Personal->Role->find('list',array('fields'=>'Role.cargo'));
                $this->set('roles',compact('roles'));
                
                $ids=$this->Personal->query("SELECT personals.id,personals.pin
                                             FROM personals");
              
              $this->set('ids',$ids);          
    }
    
    
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Personal->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
    function edit($id = null) {
             $ids=$this->Personal->query("SELECT personals.id,personals.role_id
                                            FROM personals
                                            WHERE personals.id='$id'");
              
              $this->set('ids',$ids);
              
        
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Personal->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Personal->read(null, $id);
		}
                
                //$roles=$this->Personal->Role->find('list',array('fields'=>'Role.cargo'));
                //$this->set('roles',$roles);
                $roles=$this->Personal->Role->find('list',array('fields'=>'Role.cargo'));
                $this->set('roles',compact('roles'));
                
               // $this->Personal->recursive=1; 
                 //$datos=$this->Personal->query("select roles.cargo,roles.id
                                                //FROM roles
                                                //WHERE roles.id NOT IN (select personals_roles.role_id
						//from  personals_roles
						//where  personals_roles.pesonal_id='$id')");
              
                $this->set('roles',$roles);
                
				
                 $derechos=$this->Personal->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id NOT IN (select derechos_personals.derecho_id
						from  derechos_personals
						where  derechos_personals.pesonal_id='$id')");
                  
                 $this->set('deres',$derechos);
                 
                   
                 $derechos1=$this->Personal->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id IN (select derechos_personals.derecho_id
						from  derechos_personals
						where  derechos_personals.pesonal_id='$id')");
                  
                 $this->set('deres1',$derechos1);
                 $this->set('idpersonal',$id);
                 
                 
 //$roldere=$this->Personal->query("SELECT personals.role_id, roles_derechos.derecho_id, personals.id 
        //  FROM personals, roles_derechos WHERE personals.id= '$id' and personals.role_id=roles_derechos.role_id  ");

 $this->set('deres2',$roldere);
                
				$personal=$this->Personal->query("SELECT id, role_id
          FROM personals WHERE id= '$id'  ");

 $this->set('personal1',$personal); 
                
                
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('personal', $this->Personal->findById($id));
                
                 $this->Personal->recursive=1; 
                 $datos=$this->Personal->query("select roles.cargo,roles.id
                                                FROM roles
                                                WHERE roles.id NOT IN (select personals_roles.role_id
						from  personals_roles
						where  personals_roles.pesonal_id='$id')");
              
                $this->set('roles',$datos);
                
				
                 $derechos=$this->Personal->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id NOT IN (select derechos_personals.derecho_id
						from  derechos_personals
						where  derechos_personals.pesonal_id='$id')");
                  
                 $this->set('deres',$derechos);
                 
                   
                 $derechos1=$this->Personal->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id IN (select derechos_personals.derecho_id
						from  derechos_personals
						where  derechos_personals.pesonal_id='$id')");
                  
                 $this->set('deres1',$derechos1);
                 $this->set('idpersonal',$id);
                 
                 
 $roldere=$this->Personal->query("SELECT personals.role_id, roles_derechos.derecho_id, personals.id 
          FROM personals, roles_derechos WHERE personals.id= '$id' and personals.role_id=roles_derechos.role_id  ");

 $this->set('deres2',$roldere);
                
				$personal=$this->Personal->query("SELECT id, role_id
          FROM personals WHERE id= '$id'  ");

 $this->set('personal1',$personal);
                
				
				
				
				
                
                 }
                 
                 
                 public function set_cliente($personal_id) {
                     
                     //echo "ok".$personal_id;
                     $this->Personal->query("INSERT INTO clientes (nit, nombre, apellido, direccion, fecha_nac, telefono1, telefono2, telefono3, email1, email2, email3, clase,personal_id) SELECT ci, nombre, CONCAT(paterno, ' ', materno), direccion, fecha_nacimiento, telefono1, telefono2, telefono3, email1, email2, email3, 'Empleado', id FROM personals WHERE id LIKE '$personal_id';");
                     $this->Session->setFlash(__('Accion finalizada!'));
                     $this->redirect(array('action' => 'index'));
                     exit();
                 }
                 
     
}

