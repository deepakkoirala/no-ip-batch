<?php
$user = 'NP-IP USERNAME';
$pass = 'NO-IP PASSWORD';
$host = 'NO-IP HOSTNAME';
$ip = $_SERVER['REMOTE_ADDR'];
$url = "http://$user:$pass@dynupdate.no-ip.com/nic/update?hostname=$host&myip=$ip";
echo $result = file_get_contents($url);

?>
