<?php

$hostname = "db11.grserver.gr";
$username = "billpapos";
$password = "billpapos123";
$database = "paposdb";


$link = mysql_connect( $hostname , $username , $password) or
die("Prosoxi!Provlima stin sundesi me ton server : " . mysql_error());

mysql_select_db($database, $link);