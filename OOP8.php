<?php
abstract class Mountain{
    abstract function height($height);

}

class Everest extends Mountain{
    public function height($height){
         if($height>0){
            return $height;
        } else{
             return "notogri balandlik";
        }
    }

}    

class Himolay extends Mountain{
    public function height($height){
        if($height>0){
            return $height;
        }
            else{
                return "bunday balandlik mavjud emas";
            }
        
    }
}








$a=new Everest();
echo  $a->height("Everest: quruqlikdan 10 ming metr baland ");

$b=new Himolay();
echo "<br>";
echo $b->height ("Himolay: quruqlikdan 9ming metr baland");










?>