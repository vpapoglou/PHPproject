<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Προσθηκη εργασοιας</title>
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
                           <legend>Εισαγωγη εργασιας</legend>
                           <form method="post" action="setexercise.php">
                               <p>
                                   <label for="target"> Στοχος : </label>
                                   <input id="target" type="text" name="target">
                                   <br>
                               </p>
                               <p>
                                   <label for="turnins">Παραδοτεα :</label>
                                   <input id="turnins" type="text" name="turnins">
                                   <br>
                               </p>
                               <p>
                                   <label for="turnindate">Hμερομηνια παραδοσης : </label>
                                   <input type="text" id="turnindate" name="turnindate"></input>
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