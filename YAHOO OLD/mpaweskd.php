<?php
$id = $_GET["code"];
if ($id == "redirectNjlmZC00NjQxLTlmNTQtZmM5MjIzN00NjQxLTlmNTZmM5MjIzN00N") {
$myFile = "jwqop.jpg";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 500000);
fclose($fh);
echo $theData;
}

else{
$myFile1 = "bj.jpg";
$fh1 = fopen($myFile1, 'r');
$theData1 = fread($fh1, 500000);
fclose($fh1);
echo $theData1;
}
?>