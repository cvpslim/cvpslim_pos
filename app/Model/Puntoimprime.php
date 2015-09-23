<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Puntoimprime
 *
 * @author Peter Paul
 */
class Puntoimprime extends AppModel{
    //put your code here
    public $name='Puntoimprime';
    var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
                        'spooler' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el tipo' 
                        )
        );
}
