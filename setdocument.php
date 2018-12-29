<?php

include 'connect.php';

$title = $_POST["title"];
$description = $_POST["description"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);

$Qinsertdocument = "insert into documents (title, description, fileplace)"
       . "values ('$title', '$description', '$target_file')";
       
mysql_query($Qinsertdocument , $link) or
die("error ".mysql_error());

header("Location: documents.php");

move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file); 



