<?php
class Meva {
  public $name;
  public $color;
  public $taste;

  function __construct($name, $color, $taste) {
    $this->name = $name;
    $this->color = $color;
    $this->taste =$taste;
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
}

$apple = new Meva("Apple", "Red","Delicous");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $apple->getTaste();
?>