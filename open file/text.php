
<?php

$text=fopen("a.txt","a+");


$file="jonibek qummm";

fwrite($text,$file);

rewind($text);

echo fread($text,filesize("a.txt"));
fclose($text);








?>