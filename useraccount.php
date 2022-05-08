<?php session_start();
if(empty($_SESSION['id'])):
header('Location:sign in and sign up.php');
endif;?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>userAccount</title>
	<link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
	<link rel="stylesheet" type="text/css" href="cssfile/footercss.css"> 
	<link rel="stylesheet" type="text/css" href="cssfile/search_box.css"> 

	<style>

		.btnbtn
		{
			float: right;
			padding: 7px 15px 7px 15px;
			background-color: brown;
			color: white;
		}
		.btnbtn:hover
		{
			background-color: red;
		}




	</style> 

</head>
<body>

	<?php 

	include("navBar.php");

	?>
	<a href="logout.php"><button class="btnbtn">logout</button></a>

	<h2 style="color:white;text-align: center;" >welcome to your page!!!</h2>

	




	<!----------footer------------------------------------------------------------>
 <?php 
 include("footer.php");
 ?>


</body>
</html>