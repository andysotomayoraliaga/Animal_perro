<?php
class animal{
    private $id;
    private $nombre;
    private $peso;
    private $persona;

        public function __construct($id,$nombre,$persona){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->persona=$persona;
    }    
    public function getid(){
    return $this->id;
    }
    public function getnombre(){
    return $this->nombre;
    }
   
   public function setpeso($peso){
        $this->peso=$peso;
    }

    public function getpeso(){
        return $this->peso;
    }

    public function getpersona(){
        return $this->persona;
    }
}     
    
