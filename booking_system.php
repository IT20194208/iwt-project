<!DOCTYPE html>
<html>
<head>
	
	<title>booking system</title>
	

<link rel="stylesheet" type="text/css" href="cssfile/generalall.css"><!--link as external way-->

<link rel="stylesheet" type="text/css" href="cssfile/booking_page.css">   

<link rel="stylesheet" type="text/css" href="cssfile/footercss.css">  
<link rel="stylesheet" type="text/css" href="cssfile/search_box.css">  
<script src="../fitness_trainer/jsfile/request.js"></script>    


</head>
<body>
  <center><img src="../fitness_trainer/picturee/logo.png" width="120"></center>

	<h1 class="h1class">Booking System</h1>



<!--header below-->
 <?php 
 include("navBar.php");
 ?>



	
<!-- header above -->

<h2 class="h2class">Our Packages</h2>





<div class="box">


<!-------------------------->

	<div class="box1">
		

       
             <div class="picbox1">
             	

             	<img src="../fitness_trainer/picturee/basic3.png" class="basicpng">

             	
             	<br>

             	<p class="p1">Basic</p>

             	<p class="para2"> 14 Days Per  <br>&nbsp;&nbsp;&nbsp;&nbsp;Month   </p>

             	<button class="button1">DETAILS</button>

             	<br><br>

             <a href="plan_basic.php"><button class="b1">BOOK NOW</button></a>


             </div>










	</div><!--box1-->




<!-------------------------->

	<div class="box1">



		<div class="picbox2">

			
          	
          	<img src="../fitness_trainer/picturee/prem.png" class="premium">

          	<br>

             	<p class="p2">Premium</p>

             	<p class="para2"> 20 Days Per  <br>&nbsp;&nbsp;&nbsp;&nbsp;Month   </p>

             	<button class="button2">DETAILS</button>

             	<br><br>

             	 <a href="planPremium.php"><button class="b1">BOOK NOW</button></a>


		</div>
		





	</div><!--box1-->



<!-------------------------->


	<div class="box1">


		<div class="picbox1">

			
				<img src="../fitness_trainer/picturee/pro.png" class="premium">

				<br>

             	<p class="p3">Pro</p>

             	<p class="para2"> 25 Days Per  <br>&nbsp;&nbsp;&nbsp;&nbsp;Month   </p>

             	<button class="button3">DETAILS</button>

             	<br><br>

              <a href="plan_pro.php"><button class="b1">BOOK NOW</button></a>


		</div>
		




	</div><!--box1-->







<!-------------------------->



</div><!--box-->



<span class="select_your">SELECT YOUR COACH</span>

<!-------------------------------------------------------------------------------->

<div class="fram">



			<div class="minibox">

				<img src="../fitness_trainer/picturee/coach1.jpg" class="coachpic">
				
			</div>




			<div class="main">


							<div class="part1">


										<p class="coach_deatails">
									

												NAME:A.K Gunasekara
												<br>
												EXPERENCE:3 years
												<br>
												WORKING DAYS:weekdays


										</p>




							</div><!--part1-->


										 <div class="part2">


										 		     <p class="coach_deatails">
									

															GENDER:Male
															<br>
															Method:Online
															
															
										             </p>


							             </div><!--part2-->



				             <div class="part3">


				             	<button class="request"onclick="loardData('button1')">REQUEST</button>


				            </div><!--part3-->

				
			</div><!--main-->





</div>

<!---------------------------------------------------------------------------------------->



<div class="fram">



			<div class="minibox">

				<img src="../fitness_trainer/picturee/coach2.jpg" class="coachpic">
				
			</div><!--minibox-->




			<div class="main">


							<div class="part1">


										<p class="coach_deatails">
									

												NAME:A.K Gunasekara
												<br>
												EXPERENCE:3 years
												<br>
												WORKING DAYS:weekdays


										</p>




							</div><!--part1-->


										 <div class="part2">


										 		     <p class="coach_deatails">
									

															GENDER:Male
															<br>
															Method:Online
															
															
										             </p>


							             </div><!--part2-->



				             <div class="part3">


				             	<button class="request"onclick="loardData('button2')">REQUEST</button>


				            </div><!--part3-->

				
			</div><!--main-->





</div><!--fram-->

<!-------------------------------------------------------------------------------->

<div class="fram">



			<div class="minibox">

				<img src="../fitness_trainer/picturee/coach3.png" class="coachpic">
				
			</div>




			<div class="main">



							<div class="part1">


										<p class="coach_deatails">
									

												NAME:A.K Gunasekara
												<br>
												EXPERENCE:3 years
												<br>
												WORKING DAYS:weekdays


										</p>




							</div><!--part1-->


										 <div class="part2">


										 		     <p class="coach_deatails">
									

															GENDER:Male
															<br>
															Method:Online
															
															
										             </p>


							             </div><!--part2-->



				             <div class="part3">


				             	<button class="request"onclick="loardData('button3')">REQUEST</button>


				            </div><!--part3-->

				
			</div><!--main-->





</div>

<!-------------------------------------------------------------------------------->

<div class="fram">



			<div class="minibox">

				<img src="../fitness_trainer/picturee/coach4.jpg" class="coachpic">
				
			</div>




			<div class="main">



							<div class="part1">


										<p class="coach_deatails">
									

												NAME:A.K Gunasekara
												<br>
												EXPERENCE:3 years
												<br>
												WORKING DAYS:weekdays


										</p>




							</div><!--part1-->


										 <div class="part2">


										 		     <p class="coach_deatails">
									

															GENDER:Male
															<br>
															Method:Online
															
															
										             </p>


							             </div><!--part2-->



				             <div class="part3">


				             	<button class="request"onclick="loardData('button4')">REQUEST</button>


				            </div><!--part3-->



				
			</div><!--main-->





</div><!--fram-->

<!-----------------footer-------------php------->

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