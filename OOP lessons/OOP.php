<?php
class Student {
    public $ism;
    public $familya;
    public $yosh;
    public $vazn;
}
    /*public function student() {
        echo "";
    }
}*/

$qummi = new Student(); 

$qummi->ism = "jonibek" ;
$qummi->familya = "Atahanov" ;
$qummi->yosh=16 ;
$qummi->vazn=70 ;
/*echo $qummi->yosh;
echo $qummi->ism;
echo $qummi->familya;
echo $qummi->vazn;*/
 
foreach ($qummi as $key => $value) {
   echo $key . "--" . $value . "<br>";
}


//$qummi->student();     
?>