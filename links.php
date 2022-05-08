<!DOCTYPE html>
<html>
<head>

 

	
	<title>Contact US</title>
	

<link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
<link rel="stylesheet" type="text/css" href="cssfile/footercss.css"> 
<link rel="stylesheet" type="text/css" href="cssfile/links.css">  
<link rel="stylesheet" type="text/css" href="cssfile/search_box.css">    

</head>
<body>
  <center><img src="../fitness_trainer/picturee/logo.png" width="120"></center>

	<!--header below-->
 <?php 
 include("navBar.php");
 ?>

 <h3 class="links">Links</h3>


<div class="link">


        <a href="">
              <div class="item1">

                  <h2>WORKOUT & MEAL PLANS</h2>

              </div><!--item1-->
        </a>



      <a href="https://youtu.be/ir2xV8iX38k">
          <div class="item1">

                <h2>YOUTUBE</h2>

          </div><!--item1-->
      </a>
          

      <a href="">
          <div class="item1">

                <h2>SUPPLEMENTS</h2>

          </div><!--item1-->
      </a>

      <a href="">
         <div class="item1">

                  <h2>EBOOK</h2>

         </div><!--item1-->
      </a>

      <a href="">  
           <div class="item1">

                    <h2>INSTAGRAM</h2>

           </div><!--item1-->
      </a>

      <a href="">
         <div class="item1">

                  <h2>FACEBOOK</h2>

         </div><!--item1-->
      </a>





</div><!--links-->


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