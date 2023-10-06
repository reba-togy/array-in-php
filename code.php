<html>
<body>
<form action="array.php" method="post">
Enter the string:
<input type="text" name="num1"/><br><br>
<input type="submit" name="submit" value="Check ">
</form>
<?php
if(isset($_POST['submit']))
{
     $n1= $_POST['num1'];
   $count=0;
   $y=explode(",",$n1);
   echo"Array: <br>";
   foreach($y as $values)
   {
    echo"<input type='text' value ='$values' /><br>";
    $count++;
   }
   echo"<br>Length: <input type='text' value ='$count'/><br>";
}
?>
</body>
</html>
