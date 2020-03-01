<!DOCTYPE html>
<html>
<head>
 <title></title>

 
</head>
<body>

  <h1 class="text-warning text-center" > Result Table Data : <?php echo $_POST['search'];?> </h1>
 <br>
 <button class="btn"><a href="index.php">Display Page</a></button>  
  <br>
 <br>
 <table  border="1">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Author </th>
 <th> Year </th>
 <th> Categories </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'connect_database.php'; 

$search = $_POST['search'];

 $q = "select * from book where name LIKE '%$search%' ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['author'];  ?> </td>
 <td> <?php echo $res['year'];  ?> </td>
 <td> <?php echo $res['categories'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
 ?>
 
 </table>  



 

</body>
</html>