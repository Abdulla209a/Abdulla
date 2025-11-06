<?php
/*$sonlar=["13","21","12"];
$son=0;
foreach($sonlar as $raqam){
    $son+=$raqam;
}

echo "yigindi: " . $son;*/


/*c=[1,2,12,3,2,15,6,5,71];
$b=[8,9,0,13,65,98,76,98];
$a=[32,45,2];

/*echo $a[2] . "<br>";

echo $c[4];

print $b[5];*/

/*$phones = array (
  array("iphone 13 pro",22,18),
  array("iphone 12 pro max",15,13),
  array("iphone 17 ",5,2),
  array("iphone 16 pro ",17,15)
);

echo $phones [0][0].": sklatda : ".$phones [0][1].", sotildi: ".$phones [0][2].".<br>";
echo $phones [1][0].": sklatda: ".$phones [1][1].", sotildi: ".$phones [1][2].".<br>";
echo $phones [2][0].": sklatda: ".$phones [2][1].", sotildi: ".$phones [2][2].".<br>";
echo $phones [3][0].": sklatda: ".$phones [3][1].", sotildi: ".$phones [3][2].".<br>";*/
$arr=[
[12,13,54,23,2,4,6,8,87],
 [12,24,45,44],[34,4,5,6]
];
$s=0;

for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr[$i]); $j++){
        if($arr[$i][$j]%2==0){
            $s=$s+$arr[$i][$j];

        }
    }
}

echo $s;




?>


