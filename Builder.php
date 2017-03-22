<?php
include_once 'Car.php';

class Builder {
  protected $car;
  public function __construct(Car $car)
  {
    $this->car=$car;
  }
  public function yo($color,$mileage,$brand,$name,$durability)
   {
    $this->car->get($color,$mileage,$brand,$name,$durability);
  }

}
