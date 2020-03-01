 <?php

include 'connect_database.php';

$id = $_GET['id'];

$q = " DELETE FROM book WHERE id = $id ";

mysqli_query($conn, $q);

header('location:index.php');

?>