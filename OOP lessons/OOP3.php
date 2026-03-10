<?php
class Meva {
  public $name;
  public $color;
  public $taste;
  public $price;

  function __construct($name, $color, $taste, $price) {
    $this->name = $name;
    $this->color = $color;
    $this->taste =$taste;
    $this->price=$price;
  }
  function get_name() {
    
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }                           
  function getTaste(){
    return $this->taste;
  }

  function getPrice(){
    return $this->price;
  }
}

$apple = new Meva("Apple", "Red","Delicous","10 ming som ");

$gilos=new Meva("Gilos","qizil","mazali","30 ming som");

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $apple->getTaste();
echo "<br>";
echo $apple->getPrice();
echo "<br>";
echo $gilos->get_name();
echo "<br>";
echo $gilos->get_color();
echo "<br>";
echo $gilos->getTaste();
echo "<br>";
echo $gilos->getPrice();









?>