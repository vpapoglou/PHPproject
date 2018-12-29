<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Αρχικη σελιδα</title>
<link type="text/css" href="css/styles.css" rel="stylesheet">
<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
</head>

<?php
session_start();
if (!isset($_SESSION['websiteusername'])) {
    echo "<h1>Απαγορεύεται η πρόσβαση!!!</h1>";
    exit();
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
                           <legend>Aποστολη email μεσω web φορμας</legend>
                           <form method="post" action="sendmail.php">
                               <p>
                                   <label for="sender">Αποστολεας : </label>
                                   <input id="sender" type="text" name="sender">
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