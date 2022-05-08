<?php

	session_start();
	$con=mysqli_connect("localhost","root","","online_fitness_trainer");

	if(isset($_POST['update']))
	{
		$id=$_POST['trainer_id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];

		$query="UPDATE trainerregister SET firstname='$firstname' , lastname='$lastname' ,email='$email' WHERE id='$id'";

		$query_run=mysqli_query($con,$query);

		if($query_run)
		{
            $_SESSION['status']="DATA UPDATED SUCCESSFULLY!";
			header("location:updatetrainer.php");
		}
		else
		{
			$_SESSION['status']="NOT UPDATED";
			header("location:updatetrainer.php");
		}


	}//isset_function//




?>