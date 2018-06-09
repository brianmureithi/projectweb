<?php
require ("dbcode.php");
?>
<html>
<head>
	<title>watch</title>
</head>

<body>

<?php
if (isset($_GET['id']))
{
 $id = $_GET['id'];
 $sql="SELECT * FROM videos WHERE id='$id' ";
 $query_exec = mysqli_query($dbhandle,$sql);
 while($row= mysqli_fetch_array($query_exec))
 {
   echo "Error" 
     $name= $row['name'];
     $url= $row['url'];

 }
 echo"You are watching ".$name."<br/>";
 echo "<embed src='$url' width='560' height='315'></embed>";
}
else
{
}
?>


</body>
</html>
