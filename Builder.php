<?php
Class Builder {
  private $color;
  private $mileage;
  private $brand;

  public function setColor($color) {
    $this->color= $color;
  }

  public function setMileage($mileage) {
    $this->mileage= $mileage;
  }

  public function setBrand($brand) {
    $this->brand= $brand;
  }

  public function getAttributes($name,$durability=0) {
    echo "<br>".$name."created with the following features:";
    echo "<br> Color:".$this->color."<br> Mileage:".$this->mileage."<br> Brand:".$this->brand;
    if($durability!=0)
    {
      echo "<br> Durability:".$durability;
    }
  }
}
