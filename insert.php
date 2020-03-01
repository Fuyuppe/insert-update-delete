<!DOCTYPE html>
<html>
<head>
 <title></title>

  
</head>
<body>
<h1 class="text-warning text-center" > Insert Data </h1>
 
 <button class="btn"><a href="index.php">Display Page</a></button> 
 <br>
 <br>
 <form action="save.php"  method="POST">
<table border="1">
  <tr>
    <th >Name</th>
    <td><input type="text" name="name" ></td>
    </tr>
  <tr>
    <th >Author</th>
    <td><input type="text" name="author" ></td>
    </tr>
  <tr>
    <th >Year</th>
    <td><input type="text" name="year"></td>
    </tr>
  <tr>
    <th >Categories</th>
    <td><input type="text" name="categories" ></td>
    </tr>
  
  </table>
  <input type="submit" name="submit" value="Submit">
</form>
 
 
 
</body>
</html>