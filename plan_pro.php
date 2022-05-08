<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>plan_basic</title>

	<link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
    <link rel="stylesheet" type="text/css" href="cssfile/footercss.css">  
    <link rel="stylesheet" type="text/css" href="cssfile/search_box.css"> 

  <style>

    .planname
     {
      padding: 7px 87px 7px 29px;
      border-radius: 5px;
      border: 1px solid orange;

     }
     .planform
     {
      color: white;
      width: 500px;
      height: 300px;
      /*border: 1px solid white;*/
      margin: 0px 0px 0px 530px;
     }
     .confirm
     {
      padding: 7px 100px 7px 100px;
      background-color: brown;
      color: white;
      font-weight: 600;
      border-radius: 5px;


     }
     .confirm:hover
     {
      background-color: red;
     }







  </style>
    







</head>
<body>
<div style="background-color: black;color:red;">

  <?php 


  if(isset($_POST['confirm'])){

     $name=$_POST['name'];
     $tel=$_POST['tel'];
     $email=$_POST['email'];

    


    $conn=new mysqli('localhost','root','','online_fitness_trainer');


       if($conn->connect_error)
          {
            die('Connection Faild :'.$conn->connect_error);
          }
          else
          {

                         if(strlen($name)>2)
                         {

              $stmt=$conn->prepare("INSERT INTO plan_pro(name,tel,email) VALUES(?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("sss",$name,$tel,$email);

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



<!----------------------------->





<!--header below-->
 <?php 
 include("navBar.php");
 ?>

<h1 style="text-align: center;color:white;font-family: monospace;">Pro Plan</h1>

<div class="planform">

<form method="post">

  <label for="name">Name:</label><br>

  <input type="text" placeholder="name" name="name" required class="planname">

  <br>
  <br>
  <label for="Tel">Tel:</label><br>

  <input type="text" placeholder="tel" name="tel" required class="planname">

  <br>
  <br>
  <label for="email">Email:</label><br>

  <input type="email" placeholder="email" name="email" required class="planname">

  <br>
  <br>

  <input type="submit" name="confirm" class="confirm" value="CONFIRM">

</form>


</div><!--paln form-->


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