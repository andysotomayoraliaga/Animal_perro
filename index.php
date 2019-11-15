<?php
require_once('perro.php');

$perrito=new perro("1","goofy",new persona("a1","jose","cardona"),"10 cm");
echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->getnombre_perro();
echo "<br>";
echo $gatito->getpersona();