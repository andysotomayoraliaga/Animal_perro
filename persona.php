<?php
class  persona{
    public $id_persona;
    public $nombres;
    public $apellido;

    public function __construct($id_persona,$nombres,$apellido)
    {
        $this->id_persona=$id_persona;
        $this->nombres=$nombres;
        $this->apellido=$apellido;        
    }
}
    