<?php
require("dbcode.php");
//insert info to db
if(isset($_POST['submit'])){
	
    $carid =filter_var($_POST['car_id'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$name= filter_var($_POST['name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$phonenumber=filter_var($_POST['phonenumber'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$message=filter_var($_POST['message'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	
	$sql = mysqli_query($dbhandle,"INSERT INTO client_chat(car_id,name,message,phonenumber,time) VALUES('".$carid."','".$name."','".$message."','".$phonenumber."',now())")or die (mysqli_error($dbhandle)) ;
	
	if ($sql=1){
		echo"
		<script>
		if(confirm('Your message has been sucessfully received')){
			window.location='./client-car-view.php?';
		}
		</script>
		
		";
	}
	else{
		echo"<script>
		if(confirm('An error occured, try again')){
			window.location='./client-car-view.php';
		}</script>
		";
	}
	header('location:client-car-view.php?car_id='.$_REQUEST['car_id'].'');
	exit();
}
?>