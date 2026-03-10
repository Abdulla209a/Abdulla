<?php



date_default_timezone_set("Asia/Tashkent");
echo "<br>";
echo date_default_timezone_get();


echo "<br>";
echo "<br>";
echo "<br>";

echo "bugun " . date("Y/m/d") . "<br>";




 $time=mktime(00,00,00, 01,01,2009);

echo "<br>";

echo  "date of birth " . date("d-m-Y h:i:sa",  $time);


echo "<br>";
echo "<br>";
echo "<br>";

echo $time;

$date=mktime(10,22,2008);

echo "<br>";
echo "<br>";

echo "mirzobekning tugulgan kuni " . date("m-d-Y", $date)








?>
