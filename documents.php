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
           $Qget_documents = "SELECT title, description, fileplace
            FROM `documents` ";

           $get_documents = mysql_query($Qget_documents, $link) or
                   die("Prosoxi!Provlima : " . mysql_error());

           $number = mysql_num_rows($get_documents);
           
           if ($_SESSION['role'] == "tutor") {
               echo '<article> <a class="button" href="adddocument.php">Προσθηκη νεου εγγραφου</a> </article>';
           }
           if ($number == 0) {
               echo "<article> Δεν υπαρχουν εγγραφα </article>";
           }
           else {
               while ( $document = mysql_fetch_array( $get_documents ) )
                  {
                    echo 
                   "<article> "
                            . "<h2> Tιτλος : $document[0] </h2> <br> "
                            . " Περιγραφη : $document[1] <br> "
                            . "<a class='button' href='downloadfile.php'>Download</a>"
                    . "</article>";
                  }
           }
           ?>   
       </section> 
   </section>  
</body>
</html>