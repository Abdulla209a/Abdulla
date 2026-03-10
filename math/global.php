<!DOCTYPE html>
<html>
<body>




 

</body>
</html>
<?php  
 
function tub ($a){
    $k=false;
    for($i=2; $i<=sqrt($a); $i++){
        if($a%$i==0){
            $k=true;
            break;
        
        }
    }


    if($k==false){
        return "tub son";
    }
    else{
        return "tub emas";
    }
}

 $a=113333334   ;
 
 echo tub($a);

 ?>