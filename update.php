
<?php session_start(); ?>









<?php
/*
include('conn.php');

if(isset($_POST['update']))
{
	
	$id=$_POST['id'];

	$query = "UPDATE `register` SET `firstname`='$_POST[firstname]',`lastname`='$_POST[lastname]',`email`='$_POST[email]',
	`plan`='$_POST[plan]',`password`='$_POST[password]',`person`='$_POST[person]',`height`='$_POST[height]',
	`weight`='$_POST[weight]' WHERE 'id' ='$_POST[id]'";

	$result=mysqli_query($con,$query);

	if($result)
	{
		echo "Data Updated!";
	}
	else
	{
		echo "not Updated!";
	}
}*/
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update your deatails</title>
	<link rel="stylesheet" type="text/css" href="cssfile/updatepage.css">
	<link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
	<link rel="stylesheet" type="text/css" href="cssfile/footercss.css">
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



	<h1 class="h1">UPDATE PAGE/EDIT</h1>

				<?php 
		         include("accountheader.php");
		         ?>

<div class="formpage">

	<form action = "coderegi.php" method="post">



      <label for="id">ID</label><br>
	    <input type="text" name="id" class="name">

        <br>
	      <br>

		<label for="firstname">firstname</label><br>
		<input type="text" name="firstname" class="name">
		

		<br>
		<br>

		<label for="lastname">lastname</label><br>
		<input type="text" name="lastname" class="name">

		<br>
		<br>

		<label for="email">email</label><br>
		<input type="email" name="email" class="name">

		<br>
		<br>

		<label for="password">password</label><br>
		<input type="password" name="password" class="name">

		<br>
		<br>


        Fitness Plan:<br>
      <select class="plan" name="plan" class="plan">

        <option>plan 1</option>
        <option>plan 2</option>
        <option>plan 3</option>
        <option>plan 4</option>

      </select>


      <br>
      <br>

        Type of the Person:<br>
	 <select id="name2" name="person" class="person">
				
		<option >person 1</option>
	    <option >person 2</option>
		<option >person 3</option>
	    <option >person 5</option>
		<option >person 6</option>


	 </select>

	 <br>
	 <br>

	 Height:<br>
	 <input type="number" name="height" class="name">

     <br>
     <br>

      Weight:<br>
	 <input type="number" name="weight" class="name">


	 <br>
	 <br>

	 <input type="submit" name="done" value="DONE" class="done">


	</form>

</div>
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









                 <?php 
		         include("footer.php");
		         ?>

</body>
</html>
