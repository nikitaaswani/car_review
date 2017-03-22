<?php
include_once 'Car.php';
include_once 'Builder.php';

class Sedan extends Car {

  public function get($color,$mileage,$brand,$name) {
    $this->setColor($color);
    $this->setMileage($mileage);
    $this->setBrand($brand);
    $this->getAttributes($name);
  }

  }

