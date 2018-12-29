<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Ανακοινωσεις</title>
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
           $Qget_announcements = "SELECT announcement_id, date, subject, text
            FROM `announcements` ";

           $get_announcements = mysql_query($Qget_announcements, $link) or
                   die("Prosoxi!Provlima : " . mysql_error());

           $number = mysql_num_rows($get_announcements);
           
           if ($_SESSION['role'] == "tutor") {
               echo '<article> <a class="button" href="addannouncement.php">Προσθηκη νεας ανακοινωσης</a> </article>';
           }
           if ($number == 0) {
               echo "<article> Δεν υπαρχουν ανακοινωσεις </article>";
           }
           else {
               while ( $announcement = mysql_fetch_array( $get_announcements ) )
                  {
                    echo 
                   "<article> "
                            . "<h2> Aνακοινωση $announcement[0] </h2> <br> "
                            . " Ημερονμηνια : $announcement[1] <br> "
                            . " Θεμα : $announcement[2] <br>"
                            . $announcement[3]
                    . "</article>";
                  }
           }
           ?>   
       </section> 
   </section>  
</body>
</html>