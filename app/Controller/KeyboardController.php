<?php
class KeyboardController extends AppController {
    
    public $name="Keyboard";
    public $uses ="false";
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index','createSessionMesa', 'numericPad', 'keyboardCarry','keyboardSearch');
    }
    
    public function index(){
        $this->layout = "keyboard";
    }
    
    public function numericPad(){
        $campo = $_POST['campo'];
        $this->layout = "ajax";
        $this->set("campo", $campo);
    }
    
    public function keyboardCarry(){
        $this->layout = "ajax";
        //echo 'open price';
       
    }
    
    public function keyboardSearch(){
        $this->layout = "ajax";
        //echo 'open price';
       
    }
}
