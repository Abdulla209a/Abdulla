<?php

class Fruit {
  public $name;
  public $color;
  public $taste;
  public function __construct($name, $color,$taste) {
    $this->name = $name;
    $this->color = $color;
    $this->taste = $taste;
  }
  public function intro() {
    echo " bu:  {$this->name} <br>  rangi: {$this->color} <br> tami: {$this->taste}.";
  }
}


class Strawberry extends Fruit {
  public function message() {
    echo "  qulupnayyyy ? <br>";
  }
}
$strawberry = new Strawberry("Strawberry", "red","delicous");
$strawberry->message();
$strawberry->intro();



?>