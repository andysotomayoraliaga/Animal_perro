<?php
require_once('animal.php');
require_once('persona.php');
class perro extends animal{
 private $nombre_perro;

 public function __construct($id,$nombre,$persona,$nombre_perro)
 {
    parent:: __construct($id,$nombre,$persona);
    $this->nombre_perro=$nombre_perro;
 }  
 public function getnombre_perro()
 {
     return $this->nombre_perro;
 }
}

