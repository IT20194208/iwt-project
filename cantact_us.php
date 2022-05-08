<!DOCTYPE html>
<html>
<head>


	
	<title>Contact US</title>
	

<link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
<link rel="stylesheet" type="text/css" href="cssfile/footercss.css"> 
<link rel="stylesheet" type="text/css" href="cssfile/contact.css">  
<link rel="stylesheet" type="text/css" href="cssfile/search_box.css">    

</head>
<body>

  <div style="background-color: black;color:red;">

  <?php 


  if(isset($_POST['send'])){

     $name=$_POST['name'];
     $email=$_POST['email'];
     $tel=$_POST['tel'];
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

              $stmt=$conn->prepare("INSERT INTO contact_us(name,email,tel,message) VALUES(?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssss",$name,$email,$tel,$message);

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

	
<!--header below-->
 <?php 
 include("navBar.php");
 ?>





<!-- header above -->
<div class="contact_div">




              <h1 class="contact_class">contact</h1>



</div><!--contact_div-->

<div class="form">

  <form action="#" method="post">




            <div class="form_item1">

                  <h3 class="nameclass"> Name:</h3>
                  <input type="text" name="name" placeholder="name" class="form_input">
              

            </div><!--form item1-->





             <div class="form_item1">

                  
                   <h3 class="nameclass">E-mail:</h3>
                   <input type="email" name="email" placeholder="E-mail" class="form_input">

       
            </div><!--form item1-->




            <br>
            <br>

            <br>
            <br>

            <br>
            <br>

           





            <h3 class="namecla">Phone Number:</h3>

            <input type="tel" name="tel" placeholder="phone" class="form_inputt">



            <h3 class="nameclass">Message:</h3>

            <textarea cols="90" rows="10"  name="message" class="textbox" placeholder="Message"></textarea>
            <br>
            <br>
            <button class="send" name="send">SEND</button>


</form>


</div><!--form-->
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