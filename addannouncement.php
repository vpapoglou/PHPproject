<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
<title>Προσθηκη ανακοινωσης</title>
<link type="text/css" href="css/styles.css" rel="stylesheet">
<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
</head>

<?php

session_start();
if (!isset($_SESSION['role'])) {
    echo "Προβλημα";
}
?>

  <body>
    <section id="body" class="width">
       
       <aside id="sidebar" class="column-left">
        <?php
         include 'leftmenubasic.php';
        ?>
       </aside>

               <section id="content" class="column-right">
                   <article>
                       <fieldset>
                           <legend>Εισαγωγη ανακοινωσης</legend>
                           <form method="post" action="setannouncement.php">
                               <p>
                                   <label for="date">Ημερομηνια (Year-month-date): </label>
                                   <input id="date" type="text" name="date">
                                   <br>
                               </p>
                               <p>
                                   <label for="subject">Θεμα :</label>
                                   <input id="subject" type="text" name="subject">
                                   <br>
                               </p>
                               <p>
                                   <label for="message">Kειμενο : </label>
                                   <textarea id="message" name="message" rows="11" cols="60"></textarea>
                                   <br>
                               </p>
                               <p>
                                   <input class="formbutton" type="submit" value="Αποστολη">
                               </p>
                           </form>
                       </fieldset>
                   </article>
                   
               </section>
        
    </section>
   </body>
</html>