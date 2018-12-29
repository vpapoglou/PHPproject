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
               <h1>Καλως ηλθατε στο online Μαθημα</h1>           
               <p>
                Καλωσόρισμα και εισαγωγικό κείμενο που θα περιγράφει τους στόχους (π.χ ιστοχώρος για εκμάθηση HΤΜL) και τις επιμέρους ιστοσελίδες του site (δηλ. τι περιέχεται στις ιστοσελίδες: Ανακοινώσεις, Επικοινωνία, Έγραφα μαθήματος, Εργασίες).
               </p>
               <img src="assets/onlinelearning.png"/>
           </article>
       
       </section> 
   </section>  
</body>
</html>