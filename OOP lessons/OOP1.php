<?php

Class Amirxon{
    private $name;
    private $age;
    private $school; 


    public function setAge($a){
          if($a>0){
        $this->age=$a;
          }

        }
    public function setName($b){
        $this->name=$b;
    }    
        

    public function setSchool($c){
        if($c>0){
            $this->school=$c;
        }

    }

    
  
    public function getAge(){
        return $this->age;
    
    }  
    
    public function getName(){
        return $this->name;
    }

    

    public function getSchool(){
        return $this->school;
    }





}

      

$kimdir=new Amirxon();

$kimdir->setAge(17);

echo $kimdir->getAge();

echo "<br>";

 $kimdir->setName("jonibek");

echo $kimdir->getName();

echo "<br>";

$kimdir->setSchool(46);

echo $kimdir->getSchool();




?>