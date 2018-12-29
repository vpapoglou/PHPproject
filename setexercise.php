<?php


include 'connect.php';

$target = $_POST["target"];
$turnins = $_POST["turnins"];
$turnindate = $_POST["turnindate"];


$Qinsertexercise = "insert into exercises (target, turnins, turnin_date)"
       . "values ('$target', '$turnins', '$turnindate')";
        

mysql_query($Qinsertexercise , $link) or
die("error ".mysql_error());

$Qinsertannouncement = "insert into announcements (date, subject, text)"
       . "values (now(), 'Yποβληθηκε η εργασια $subject', 'Η ημερομηνια παρδοσης της εργασιας ειναι $turnindate')";
        

mysql_query($Qinsertannouncement , $link) or
die("error ".mysql_error());

       header("Location: exercises.php");