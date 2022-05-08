<?php

	session_start();
	$con=mysqli_connect("localhost","root","","online_fitness_trainer");

	if(isset($_POST['done']))
	{
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$plan=$_POST['plan'];
		$person=$_POST['person'];
		$height=$_POST['height'];
		$weight=$_POST['weight'];



		$query="UPDATE register SET firstname='$firstname' , lastname='$lastname' ,email='$email',password='$password',plan='$plan',person='$person',height='$height',weight='$weight' WHERE id='$id'";

		//$id=md5($id);

		$query_run=mysqli_query($con,$query);

		if($query_run)
		{
            $_SESSION['status']="DATA UPDATED SUCCESSFULLY!";
			header("location:update.php");
		}
		else
		{
			$_SESSION['status']="NOT UPDATED";
			header("location:update.php");
		}


	}//isset_function//




?>