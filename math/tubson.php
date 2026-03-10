  <?php 
function tub($a){
    $k=0;
        for($i=2; $i<=sqrt($a); $i++){
                if($a%$i==0){
                    return $k++;
                    break;
                }        
        }
        if($k==0){
            return true;
        }
        else{
            return false;
        }
}
$m=100;
$n=200;
$k=0;
if($n==2){
    echo 1;
}
else{
    for($i=$m; $i<=$n; $i++){
            if(tub($i)){
                    $k++;
            }
           
    }
    echo $k;
}


?>