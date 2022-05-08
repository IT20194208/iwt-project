<!DOCTYPE html>
<html>
<head>

    <style>

    .go_account
    {
      border-radius: 5px;
      padding: 7px 46px 7px 46px;
      border: 4px solid orange;
      margin-left: 298px;
      background: brown;
      color: white;
      font-weight: 700;
      font-family: mono;
      cursor: pointer;
    }
    .go_account:hover
    {
        background-color: red;
    }
    .account
    {
        width: 700px;
       /* border: 1px solid white;*/

    }

     

   </style>


	<title>online fitness trainer</title>
	<!--css link below-->
   

     

    <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link rel="stylesheet" type="text/css" href="cssfile/homepage.css">
    <link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
    <link rel="stylesheet" type="text/css" href="cssfile/footercss.css">  
    <link rel="stylesheet" type="text/css" href="cssfile/search_box.css"> 

      



</head>
<body>

    <script>


    alert("Welcome to the OFT");


    </script>


<center>

	<!--OFT logo-->
	<img src="../fitness_trainer/picturee/logo.png" width="120">
  


</center>  




<a href="sign in and sign up.php" >

<img src="../fitness_trainer/picturee/avtar.png"  class="avtar" alt="sign in/sign up">
<h3 style="float:right; color:white;">sign up/log in</h3>
</a>


 
 <h1 class="h1class">Online Fitness Trainer-OFT</h1>

<!--header below-->
 <?php 
 include("navBar.php");
 ?>



	<!--picture here-->

		<img src="../fitness_trainer/picturee/right.jpg" class="pic1right" alt="fitness picture" align="right">
    <!--topic-->
       <h2 id="h2id"> " True enjoyment comes from activity of the mind and exercise of the body "</h2>
	   
	<!--paragraph-->
	<div class="div1">
	   <p>



	   	We believe fitness sets the foundation for a fulfilling life. We’re here to help people feel 
	good for good by simplifying exercise for everyone.

		You will get 100% personalized direction and responsibility 
		from a certified individual coach with all the adaptability of solo workouts you'll be 
		able do anytime, anyplace.
	<br>
	OFT provides you ,
  <ul>
		<li> Muscle building plans</li>
		<li> Weight lost plans</li>
		<li> Plans for getting fitness and strength</li>
		<li> Performance plans</li>	
		<li>Other plans</li>	

        <div class="account">


          <a href="account.php"><button class="go_account">ACCOUNT PAGE</button></a>


       </div> 

	<br><h2>Come and join with us for a revoluition...<h2>

 </ul>






	</p>  
      
  	</div>
  	<br><!--break tag-->
  	

											<!--  footer below-->

<!--video tag-->

<div class="section">

          <video autoplay loop muted>
            
                      <source src="../fitness_trainer/video/v1.mp4" type="video/mp4">

          </video>


  </div><!--section-->



<br>
<br>
<br>

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