<?php

class odam{
    public function name(){
        return "14";


    }
}

class qummi extends odam{
    public function name(){
        return "15";
    }
}


class baqqi extends odam{
    public function name(){
        return "16";
    }
}

class temmi extends odam{
    public function name(){
        return "17";
    }
}

$name=new odam();
$nam=new qummi();
$na=new baqqi();
$n=new temmi();
echo $name->name() . "<br>";
echo $nam->name() . "<br>";
echo $na->name() . "<br>";
echo $n->name();






?>