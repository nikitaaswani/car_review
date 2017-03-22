<?php
include_once 'Builder.php';
include_once 'Car.php';

class Xuv extends Car{

   private $durability;

  public function setDurability($durability) {
    return $this->durability=$durability;
  }

  public function get($color,$mileage,$brand,$name,$durability) {
  $this->setColor($color);
  $this->setMileage($mileage);
  $this->setBrand($brand);
  $this->getAttributes($name,$this->setDurability($durability));
  }
}


// }
