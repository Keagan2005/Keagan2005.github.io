<?php
header( 'Location: YOURIMAGEURLHERE' ) ;

$ip=$_SERVER['REMOTE_ADDR'];

$myFile = "ip.txt";
$fh = fopen($myFile, 'a') or die("cannot open file");
$stringData = "$ip\n";
fwrite($fh, $stringData);
fclose($fh);
?>