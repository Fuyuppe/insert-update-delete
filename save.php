<?php

include 'connect_database.php';



    $name = $_POST['name'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $categories = $_POST['categories'];
   
    $q = " INSERT INTO book (id , name , author , year , categories ) VALUES ( '', '$name', '$author' , '$year' , '$categories' )";
   
    $query = mysqli_query($conn,$q);
    header('location:index.php');


?>