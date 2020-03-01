 <?php

 include 'connect_database.php';

if(isset($_POST['done'])){

    $id = $_GET['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $categories = $_POST['categories'];
    $q = " update book set id=$id, name='$name', author='$author' , year='$year', categories = '$categories' where id=$id  ";
   
    $query = mysqli_query($conn,$q);
   
    header('location:index.php');
    }
 ?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  
</head>
<body>
<h1 class="text-warning text-center" > Update Data </h1>
 
 <button class="btn"><a href="index.php">Display Page</a></button> 
 <br>
 <br>    
<?php 

$id = $_GET['id'];
$q = "select * from book where id = $id ";

 $query = mysqli_query($conn,$q);

 $res = mysqli_fetch_array($query);
 ?>
 <form  method="POST">
<table border="1">
  <tr>
    <th >Name</th>
    <td><input type="text" name="name" value="<?php echo $res['name'];?>" ></td>
    </tr>
  <tr>
    <th >Author</th>
    <td><input type="text" name="author" value="<?php echo $res['author'];?>" ></td>
    </tr>
  <tr>
    <th >Year</th>
    <td><input type="text" name="year" value="<?php echo $res['year'];?>"></td>
    </tr>
  <tr>
    <th >Categories</th>
    <td><input type="text" name="categories" value="<?php echo $res['categories'];?>" ></td>
    </tr>
  
  </table>
  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
</form>
 
 
 
</body>
</html>