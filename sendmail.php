<?php

include 'connect.php';

$sender = $_POST['sender'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$tutor = "tutor";

$QgetTutors = "select * from `dynamicwebsiteusers` 
        where role = '$tutor' " ;

$get_tutors = mysql_query($QgetTutors , $link) or
die("Prosoxi!Provlima : " . mysql_error());

$number = mysql_num_rows( $get_tutors );
if ( $number == 0)
{
    echo "Λαθος στοιχεια, προσπαθηστε ξανα";
}
else {
     while ( $tutor = mysql_fetch_array( $get_tutors ) )
        {
         mail($tutor[2], $subject, $message);
        }
}


