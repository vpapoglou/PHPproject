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
                           <legend>Εισαγωγη εγγραφου</legend>
                           <form method="post" action="setdocument.php" enctype="multipart/form-data">
                               <p>
                                   <label for="title">Tιτλος : </label>
                                   <input id="title" type="text" name="title">
                                   <br>
                               </p>
                               <p>
                                   <label for="description">Περιγραφη :</label>
                                   <input id="description" type="text" name="description">
                                   <br>
                               </p>
                               <p>
                                   <input class="formbutton" type="file" name="filetoupload" id="filetoupload">
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