<?php

Class Mashin{

public $name;
public $tezlik;

public function speed_up($a){
    if($a>0){
        $this->tezlik=$a;
    }
}

public function getTezlik(){
    return $this->tezlik;
}

}


$cobalt=new Mashin();

$damas=new Mashin();


   $damas->speed_up(70);



echo $damas->getTezlik();

echo "<br>";

 $cobalt->speed_up(120);

echo $cobalt->getTezlik();








?>