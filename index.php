<?php
require_once('gato.php');

$gatito=new gato("1","michi",new persona("a1","juan","mendoza"),"5 cm");
echo $gatito->getid();
echo "<br>";
echo $gatito->getnombre();
echo "<br>";
echo $gatito->gettamaño_bigote();
echo "<br>";
echo $gatito->getpersona();