<?php

include 'connect.php';

$loginname = $_POST["loginname"];
$password = $_POST["password"];

$Qcheck_user = "SELECT name, role
FROM `dynamicwebsiteusers`
WHERE loginname = '$loginname'
AND password = '$password' ";

$check_user = mysql_query($Qcheck_user , $link) or
die("Prosoxi!Provlima stin epilogi pinaka user : " . mysql_error());

$number = mysql_num_rows( $check_user );
if ( $number == 0)
{
    echo "Λαθος στοιχεια, προσπαθηστε ξανα";
}
else
{   
$user = mysql_fetch_array( $check_user ); 
    $websiteusername = $user[0];  
    $role = $user[1];
    
    session_start();
    $_SESSION['websiteusername'] = $websiteusername;
    $_SESSION['role'] = $role;

    if ( isset($_SESSION['websiteusername']) ) { 
       header("Location: home.php");
    }
    else
      exit();
}