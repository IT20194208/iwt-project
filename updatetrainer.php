
<?php session_start(); ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update trainer</title>
	 <link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
	  <link rel="stylesheet" type="text/css" href="cssfile/footercss.css">


	 <style>

	 .formtrainer
	 {
	 	font-family: monospace;
	 	color: white;
	 	font-size: 18px;
	 }
	 .formtrainer
	 {
	 	width: 980px;
	 	height: 400px;
	 	/*border: 1px solid white;*/
	 	margin-left: 351px;
        padding-left: 192px;
        padding-top: 46px;
	 }
	 .name
	 {
	 	padding: 7px 84px 7px 6px;
	 }
	 .trainer_id
	 {
	 	padding: 7px 84px 7px 6px;
	 }
	 .upbtn
	 {
	 	padding: 6px 96px 6px 96px;
	 	color: white;
	 	font-weight: 700;
	 	background-color: brown;
	 }
	 .upbtn:hover
	 {
	 	background-color: red;
	 }



	</style>
 

</head>
<body>

<div style="color:white ;background-color:black;">
<!----------------------------------->
	<?php 

	if(isset($_SESSION['status']))
	{
		echo "<h4>".$_SESSION['status']."</h4>";
		unset($_SESSION['status']);
	}


	?>
</div>
<!------------------------------------------->

	<center><h1 class="update"style="color:white;font-family: monospace;">TRAINER UPDATE/EDIT</h1></center>

	
   <!--header below-->
 <?php 
 include("accountheader.php");
 ?>





	<form action="code.php" method="post" class="formtrainer">

        ID:<br>
        <input type="text" name="trainer_id" class="trainer_id" placeholder="id">

        <br>
        <br>


        firstname:<br>
		<input type="text" name="firstname" placeholder="firstname" class="name">

		<br>
		<br>

		lastname:<br>
		<input type="text" name="lastname" placeholder="lastname" class="name">

		<br>
		<br>

		email:<br>
		<input type="email" name="email" placeholder="E-mail" class="name">

		<br>
		<br>

		<input type="submit" value="SAVE" name="update" class="upbtn">


	</form>





	<!-----------------footer contact form--------------->
	<div style="background-color: black;color:red;">

	<?php 


	if(isset($_POST['button2'])){

		 $name=$_POST['name'];
		 $mail=$_POST['mail'];
		 $message=$_POST['message'];

		


		$conn=new mysqli('localhost','root','','online_fitness_trainer');


       if($conn->connect_error)
					{
						die('Connection Faild :'.$conn->connect_error);
					}
					else
					{

	                       if(strlen($name)>4)
	                       {

							$stmt=$conn->prepare("INSERT INTO contact_footer(name,email,message) VALUES(?,?,?)");
							//table3 is the table name//

							$stmt->bind_param("sss",$name,$mail,$message);

							$stmt->execute();
							echo "send successfully!";

							$stmt->close();
							$conn->close();
						  }
						  else
						  {
						  	echo "wrong user name!";
						  }




					}
					
			}			
	

	 ?>

</div>

<!----------footer------------------------------------------------------------>
<?php 
 include("footer.php");
 ?>


</body>
</html>