<?php
include_once 'Sedan.php';
include_once 'Xuv.php';

$sedan = new Sedan();
$sedan->setColor('red');
$sedan->setMileage(45);
$sedan->setBrand('faltu');
$sedan->getAttributes('Sedan');

$xuv = new Xuv();
$xuv->setColor('blue');
$xuv->setMileage(35);
$xuv->setBrand('thullu');

$xuv->getAttributes('XUV',$xuv->setDurability(5));
?>
