<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Montonpordia
 *
 * @author Maritza
 */
class Montopordia extends AppModel{
    //put your code here
    
     public $name='Montopordia';
     public $belongsTo=array('Efectivo','Jornada');
}
