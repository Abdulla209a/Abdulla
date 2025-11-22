<?php

class Car{
    public $model;
    public $color;
    public $number;
    public $price;


    function  __construct($model,$color,$number,$price) {
        $this->model = $model;
        $this->color=$color;
        $this->number=$number;
        $this->price=$price;

    }

    function __destruct(){
        
    echo  "<br>"."dastur yopildi";
}
}

 


$qummi=new Car("bmw m5 f90","blue","90 999 AAA","500 ming dollor");


echo $qummi->model;
echo "<br>";
echo $qummi->color;
echo "<br>";
echo $qummi->number;
echo "<br>";
echo $qummi->price;

$matt=new Car("porsche 911","grey","01 001 OOO","300 ming dollar");


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo $matt->model;
echo "<br>";
echo $matt->color;
echo "<br>";
echo $matt->number; 
echo "<br>";
echo $matt->price ;

$baqqi=new Car("mercedes-benz cls 200","black","90 900 AAA","200 ming dollar");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo $baqqi->model;
echo "<br>";
echo $baqqi->color;
echo "<br>";
echo $baqqi->number; 
echo "<br>";
echo $baqqi->price ;



?>