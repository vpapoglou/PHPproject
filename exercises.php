<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Εργασιες</title>
<link type="text/css" href="css/styles.css" rel="stylesheet">
<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
</head>

<?php
session_start();
?>

<body>
   <section id="body" class="width">
       
       <aside id="sidebar" class="column-left">
        <?php
         include 'leftmenubasic.php';
        ?>
       </aside>
       
       <section id="content" class="column-right">
           <?php            
           include 'connect.php';
           $Qget_exercises = "SELECT exercise_id, target, turnins, turnin_date 
            FROM `exercises` ";

           $get_exercises = mysql_query($Qget_exercises, $link) or
                   die("Prosoxi!Provlima : " . mysql_error());

           $number = mysql_num_rows($get_exercises);
           
           if ($_SESSION['role'] == "tutor") {
               echo '<article> <a class="button" href="addexercise.php">Προσθηκη νεας εργασιας</a> </article>';
           }
           if ($number == 0) {
               echo "<article> Δεν υπαρχουν εργασιες </article>";
           }
           else {
               while ( $exercise = mysql_fetch_array( $get_exercises ) )
                  {
                    echo 
                   "<article> "
                            . "<h2> Εργασια : $exercise[0] </h2> <br> "
                            . " Στοχοι : $exercise[1] <br> "
                            . "Εκφωνηση : Κατεβαστε την εκφωνηση σας εδω <br>"
                            . "Παραδοτεα : $exercise[2] <br>"
                            . "Hμερομηνια παραδοσης : $exercise[3]"
                            ."</article>";
                  }
           }
           ?>   
       </section> 
   </section>  
</body>
</html>