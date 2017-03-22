<?php
include_once 'Builder.php';

class Xuv extends Builder {

  private $durability;

  public function setDurability($durability) {
    return $this->durability=$durability;
  }
}
