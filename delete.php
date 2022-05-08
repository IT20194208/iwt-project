<?php

	include 'conn.php';
	$id=$_GET['id'];
	$q="DELETE FROM register WHERE id=$id";

	mysqli_query($con,$q);

    header('location:account.php');

    

	?>