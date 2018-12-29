<?php

include 'connect.php';

$date = $_POST["date"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$Qinsertannouncement = "insert into announcements (date, subject, text)"
       . "values ('$date', '$subject', '$message')";
        

mysql_query($Qinsertannouncement , $link) or
die("error ".mysql_error());

       header("Location: announcements.php");
