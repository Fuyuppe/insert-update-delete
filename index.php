<!DOCTYPE html>
<html>
<head>
 <title></title>

 
</head>
<body>

 <br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
  
 <form action="result.php" method="POST"> 
 <button class="btn"><a href="insert.php">INSERT DATA</a></button>  Search : <input type="text" name="search"  placeholder="Book"> <input type="submit" name="submit" value="Submit"> 
</form>
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
 $q = "select * from book ";

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