<?php

class Car{
    public $name;
    public $color;
    public $price;
    public $date;

    public function __construct ( $name,$color,$price){

        $this->name=$name;
        $this->color=$color;
        $this->price=$price;

    }

    public function intro(){
        echo "model: {$this->name} <br> rangi: {$this->color} <br> narxi: {$this->price} ";
    }




}

class Cobalt extends Car{
    public $number="01 001 AAA";
    public function message(){
        echo " CAR <br>";
    }

    public function setDate($a){
        if($a>0){
        return $this->date=$a;}

    }

    public function getDate(){
    return $this->date;
}
}

 

$cobalt=new Cobalt(" midnight-cobalt","oq","155 mln som");

 $cobalt->message();
 $cobalt->intro();
echo "<br>";
 $cobalt->setDate( 2025) ;
      echo "ishlab chiqarilgan sana:" . $cobalt->getDate() . "<br>";


class Gentra extends Cobalt{

  public $xaridor; 


}

$ge=new Gentra("midnight-cobalt","oq","155 mln som");

echo "number:" .   $ge->number;



?>