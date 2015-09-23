<?php
class RolesController extends AppController{
    public $name='Roles';
    public $components=array('Session');
 
 public function index() {
     $roles = $this->Role->find('all');
     $this->set('roles', $roles);
     
}
public function add() {
		if (!empty($this->data)) {
			$this->Role->create($this->data);
			if ($this->Role->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Role->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
    function edit($id = null) {
        
        
          $ids=$this->Role->query("SELECT roles.id
                                    FROM roles
                                    WHERE roles.id='$id'");
                
                 $this->set('ids',$ids);
                 
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Role->read(null, $id);
		}
                
                 $derechos=$this->Role->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id NOT IN (select roles_derechos.derecho_id
                                                                            from  roles_derechos
                                                                            where  roles_derechos.role_id='$id')");
                
                 $this->set('deres',$derechos);
                 
                 $lisderechos=$this->Role->query("SELECT derechos.id,derechos.permisos
                                                    from derechos,roles_derechos
                                                    WHERE derechos.id=roles_derechos.derecho_id and roles_derechos.role_id='$id'");
                 $this->set('des',$lisderechos);
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('role', $this->Role->findById($id));
                
                $derechos=$this->Role->query("select derechos.id,derechos.permisos
                                                FROM derechos
                                                WHERE derechos.id NOT IN (select roles_derechos.derecho_id
                                                                            from  roles_derechos
                                                                            where  roles_derechos.role_id='$id')");
                
                 $this->set('deres',$derechos);
                 
                 $lisderechos=$this->Role->query("SELECT derechos.id,derechos.permisos
                                                    from derechos,roles_derechos
                                                    WHERE derechos.id=roles_derechos.derecho_id and roles_derechos.role_id='$id'");
                 $this->set('des',$lisderechos);
	}
}

