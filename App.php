<?php
include_once 'Car.php';
include_once 'Builder.php';
include_once 'Sedan.php';
include_once 'Xuv.php';

$sedan=new Sedan();
$builder=new Builder($sedan);
$builder->yo('red',40,'thullu','Sedan',0);

$xuv = new Xuv();
$builder=new Builder($xuv);
$builder->yo('blue',30,'yo','XUV',5);


?>
