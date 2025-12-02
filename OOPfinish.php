<?php

class Qummi{
    public static $name=16;
    public static $age="jonibek";
    public static $class=10;
    public static $school=46;
    public static function multiply(){
        return $name+$class+$school;
    }

     
}

class Baqqu extends Qummi{
    const PI=3.14;
    

}




echo Baqqu::$name;
echo "<br>";
echo Baqqu::$age;
echo "<br>";
echo Baqqu::$class;
echo "<br>";
echo Baqqu::$school;
echo "<br>";
echo Baqqu::PI;









?>