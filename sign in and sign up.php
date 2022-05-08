
<!DOCTYPE html>
<html>
<head>
	<title>Sign in,Sign up</title>
 


    <link rel="stylesheet" type="text/css" href="cssfile/footercss.css">     
    <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css"><!--link as external way-->
    <link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
    <link rel="stylesheet" type="text/css" href="cssfile/loginandsignup.css">
    <link rel="stylesheet" type="text/css" href="cssfile/search_box.css">  

  



</head>
<body>
	
	<!----------------------login--php--------------------->

	<div style="color:red; background-color: black;">

		<!--

		if(isset($_POST['submit1'])){

		 $uname       =   $_POST['uname'];
		 $u_password  =   $_POST['u_password'];

		 $u_password=md5($u_password); //password encrypted//



		$conn=new mysqli('localhost','root','','online_fitness_trainer');

     


       if($conn->connect_error)
					{
						die('Connection Faild :'.$conn->connect_error);
					}
					else
					{

	                      if(strlen($uname)>4)
	                       {

							$stmt=$conn->prepare("INSERT INTO login(uname,u_password) VALUES(?,?)");
							//table3 is the table name//

							$stmt->bind_param("ss",$uname,$u_password);

							$stmt->execute();
							echo "login successfully!";

							$stmt->close();
							$conn->close();
						  }
						  else
						  {
						  	echo "wrong user name!";
						  }




					}
					
			}		
	


		-->
		

		</div><!--login-->


	<div style="color:red; background-color: black;">

<!-----------------------------register php------------------------------->

		<?php 

		if(isset($_POST['submit2']))
		{


		
				
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$Email=$_POST['email'];
					$plan=$_POST['plan'];
					$password=$_POST['password'];
					$c_password=$_POST['c_password'];
					$person=$_POST['person'];
					$height=$_POST['height'];
					$weight=$_POST['weight'];
					$picture=$_POST['picture'];

					

					$conn=new mysqli('localhost','root','','online_fitness_trainer');//"online_fitness_trainer" is the database name//

    
					if($conn->connect_error)
					{
						die('Connection Faild :'.$conn->connect_error);
					}
					else
					{//else//

						if(strlen($firstname)>4)//your must include more than 4 words to condition true//
						{
							echo "name correct!";
							echo "<br>";



									if($password==$c_password)//confirm password and password should be match//
									{

				                        $password=md5($password);//password is encrypted//
				                         


										$stmt=$conn->prepare("INSERT INTO register(firstname,lastname,email,plan,password,person,height,weight,picture) VALUES(?,?,?,?,?,?,?,?,?)");
										//table2 is the table name//

										$stmt->bind_param("ssssssiib",$firstname,$lastname,$Email,$plan,$password,$person,$height,$weight,$picture);

										$stmt->execute();
										echo "Registration successfully!";

										$stmt->close();
										$conn->close();
					             }//password//
								else
								{
			                         echo "password not matched , input again!";
								}


						}//strlen function//	
						else{

							echo "<br>";

							echo "you input less than four word input again!";
						}	

				    }//else//
					
			}//for btn//		
			

	?><!--end of php tag-->




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



  <center><img src="../fitness_trainer/picturee/logo.png" width="120"></center>

	<h1 class="h1">Login and Sign Up</h1>


<!--unodered list-->

	<ul class="menu">

		<li class="menu"><a href="homepage.php">Home</a></li>
   
    <li class="menu"><a href="sign in and sign up.php">Log in/Sign up</a></li>
    <li class="menu"><a href="about us.php">About</a></li>
    <li class="menu"><a href="our_plans.php">Plans</a></li>
    <li class="menu"><a href="service.php">Service</a></li>
    <li class="menu"><a href="trainer_deatails.php">Trainer</a></li>
    <li class="menu"><a href="booking_system.php">Booking</a></li>
     <li class="menu"><a href="cantact_us.php">Contact</a></li>
     <li class="menu"><a href="links.php">link</a></li>

      

      
   <!-- <li>
    <div class="site-search">
      <form action="#" method="get">

       
      

      <input type="search" placeholder="Search" name="search-box">
      
      <button type="submit"></button>
  

       </form>

    </div>  
      
    
    </li>-->




	</ul>

<div class="searching">

    <div class="type1">

            <input type="search" name="searchh" placeholder="Search">

    </div><!--type1-->



    <div class="type2">

           <img src="../fitness_trainer/picturee/sear.png" id="pp1">

    </div><!--type2-->

</div><!--searching-->



<!--log in-->

	<form action="loginProcess.php" method="post" class="form1">

		<fieldset>

		<legend style="color:red; font-size:22px; font-weight:bold;">Log in</legend>
<div class="fix">
		User Name:&nbsp;<input type="text" id="name1" name="firstname" placeholder="User name" class="inputTypeText" required>
		<br>
		<br>
		
	   password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="name1" name="password" placeholder="password" required>
    
    <br>
		<br>
    
  </div>

  <div class="fix2">
		
		<button class="button" name="submit1">Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="link2"><font color="blue">forget password?</font></a>

  </div>


      </fieldset>
	</form>

<!------------------------------------------signup------------------------------------------------>
	<form action="sign in and sign up.php" method="post" class="form2">

		<fieldset>

			<legend style="color:red; font-size:22px; font-weight:bold; ">Sign up for new member</legend>

        <img src="../fitness_trainer/picturee/unnamed.png" class="unnamedPng">



        <div class="fix">
			First Name:&nbsp;<input type="text" id="name2" placeholder=" First Name" name="firstname" class="inputTypeText" required>


			<br>
			<br>

      
			Last Name:&nbsp;&nbsp;<input type="text" id="name2" placeholder=" Last Name" name="lastname" class="inputTypeText" required> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Height:&nbsp;<input type="number" class="height" name="height" placeholder="Height">
      


			<br>
			<br>

      
			E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="name2" placeholder="E-mail" required> 
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Weight:&nbsp;<input type="number" class="Weight" name="weight" placeholder="Weight" required>
     

			<br>
			<br>


      
      Fitness Plan:
      <select class="plan" name="plan">

        <option>plan 1</option>
        <option>plan 2</option>
        <option>plan 3</option>
        <option>plan 4</option>



      </select>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;
        Uploard your picture:&nbsp;<input type="file" name="picture">
     <br>
     <br>
     

			password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="name2" name="password" placeholder="password" rquired>


     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="trainerregister.php" class="link">Click here for registering trainer</a><!--create this for register trainer 
      link this another page for trainer register-->
     


     </div>

    

     
			<br>
			


     Confirm password:&nbsp;&nbsp;<input type="password" id="name2" name="c_password" placeholder="password" required>


			<br>
			<br>
			Type of the Person:
			<select id="name2" name="person">
				
				<option >person 1</option>
				<option >person 2</option>
				<option >person 3</option>
				<option >person 5</option>
				<option >person 6</option>


			</select>

			<br>
      <br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="payment_deatails.php" class="link">Payment For Member</a>
			<br>
      <br>
      
<div class="fix2">
			<button class="button" name="submit2">Sign Up</button>

</div>
			
		</fieldset>


	</form>

	


  
<br>


<!--video -->


  <div class="section">

 

<video autoplay loop muted>
  
               <source src="../fitness_trainer/video/v2.mp4" type="video/mp4">

</video>


</div><!--section-->


<br>
<br>

<hr>

<!----------footer------------------------------------------------------------>


  <div class="footermain">

<!------------------------------------>


    <div class="footer1">


      


                <h3 class="h3clz">Contact Details</h3>


                  <div class="logoo">
                    
                      <img src="../fitness_trainer/picturee/call.png" class="callpng">

                  </div>


                          
                            <div class="logodetail">036-2256990</div>



                                 <!------------------------------------------------------------------------>


                                   


                  <div class="logoo">
                    
                      <img src="../fitness_trainer/picturee/m.png" class="callpng">

                  </div>


                          
                            <div class="logodetail">Contact Us</div>
                                      
                                   

<!-------------------------------------------------------------------------------------------------->



                                   <div class="logoo">
                    
                      <img src="../fitness_trainer/picturee/locate.png" class="locationpng">

                  </div>


                          
                            <div class="logodetail">No.B/233,Main road,Malabe</div>


                            <!--------------------------------------------------------------->


                                <h3 class="h3clz">Sign up for our Newsletter</h3>



                            <form action="#" method="get">




                              <input type="email" name="mail1" placeholder="E-mail" class="mail">

                              <br>
                              
                              <input type="submit" name="button" value="SUBMIT" class="submit2">





                            </form><!--form end-->



    </div><!--footer 1-->

<!------------------------------------>


    <div class="footer2">

      <h3 class="contact_form">Contact Form</h3>


                    <form action="sign in and sign up.php" method="post" class="formclz">




                              <input type="text" name="name" placeholder="First name" class="mail2">
                              <br>
                              <input type="email" name="mail" placeholder="E-mail" class="mail2">
                              <br>
                              <textarea cols="32" rows="5" name="message" placeholder="Message" class="message"></textarea>
                              
                                        <br>
                                        <input type="submit" name="button2" value="SUBMIT" class="submit">





                            </form><!--form end-->



    </div><!--footer 1-->

<!------------------------------------>

    <div class="footer3">



      <h4 class="h4class">Opening Time</h4>

      <ul class="ulclass">


        <li>Mon-Fri 12:00pm-10.00pm</li>
        
                <li>Sat-Sun 8.00am-6.00pm</li>



            </ul>
<div class="bottom_png_clz">
<!-------------------------------------------------->
            <div class="bottompng">

              <img src="../fitness_trainer/picturee/download.png" class="bpng">
              
            </div>
<!-------------------------------------------------->
            <div class="bottompng">

              <img src="../fitness_trainer/picturee/google+.png" class="bpng">

            </div>
<!-------------------------------------------------->
            <div class="bottompng">

              <img src="../fitness_trainer/picturee/f2.png" class="bpng">

            </div>
<!-------------------------------------------------->
            <div class="bottompng">

              <img src="../fitness_trainer/picturee/twitter-logo-3.png" class="bpngg">

            </div>

<!-------------------------------------------------->
</div><!--bottom_png clz-->




    </div><!--footer 1-->

<!------------------------------------>
  </div><!--footermain-->



</body>
</html>