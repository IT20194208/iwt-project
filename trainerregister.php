<!DOCTYPE html>
<html>
<head>
     <style>

    .go_account
    {
      border-radius: 5px;
      padding: 7px 46px 7px 46px;
      border: 4px solid orange;
      margin-left: 1042px;
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
        width: 1319px;
       /* border: 1px solid white;*/

    }

     

   </style>

	
	<title>trainer details</title>
	

<link rel="stylesheet" type="text/css" href="cssfile/generalall.css"><!--link as external way-->

<link rel="stylesheet" type="text/css" href="cssfile/trainerregister.css">
<link rel="stylesheet" type="text/css" href="cssfile/search_box.css">  




</head>
<body>
    <div style="color: red;background-color: black;">
        
     <!-----------------------------register php------------------------------->

        <?php 

        if(isset($_POST['register']))
        {


        
                
                    $firstname=$_POST['firstname'];
                    $qualification=$_POST['qualification'];
                    $lastname=$_POST['lastname'];
                    $email=$_POST['email'];
                   
                    $password=$_POST['password'];
                    $repassword=$_POST['repassword'];
                    $birthday=$_POST['birthday'];
                    $address=$_POST['address'];
                   

                    

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



                                    if($password==$repassword)//confirm password and password should be match//
                                    {

                                        $password=md5($password);
                                         $repassword=md5($repassword);//password is encrypted//
                                         


                                        $stmt=$conn->prepare("INSERT INTO trainerregister(firstname,qualification,lastname,email,password,repassword,birthday,address) VALUES(?,?,?,?,?,?,?,?)");
                                      
                                        $stmt->bind_param("ssssssss",$firstname,$qualification,$lastname,$email,$password,$repassword,$birthday,$address);

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




  <center><img src="../fitness_trainer/picturee/logo.png" width="120"></center>

	<h1 class="h1class">Trainer Register</h1>

<!--header below-->
 <?php 
 include("navBar.php");
 ?>

      <div class="account">


          <a href="trainerAccount.php"><button class="go_account">TRAINER ACCOUNT</button></a>


       </div> 




<div class="form">


<form action="#" method="post" class="form2">

    <fieldset>

    
      <legend style="color:red; font-size:22px; font-weight:bold;">Trainer Register Form</legend>

        
   <div class="forCenter">



        <div class="fix">
      First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="name2" placeholder=" First Name" name="firstname"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br>
      <br>
      Proffesional Qualification:
      <br>
      <br>


      <div class="textarea">
      <textarea class="text" rows="10" cols="40" name="qualification"></textarea>
      </div>


      <br>
      <br>

      
      Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="name2" placeholder=" Last Name" name="lastname"> 

      


      <br>
      <br>

      
      E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" name="email" id="name2" placeholder="E-mail"> 
      
     

      <br>
      <br>
     

      password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" id="name2" name="password" placeholder="password">


     
     </div>

    

     
      <br>
      


     Confirm password:<input type="password" id="name2" name="repassword" placeholder="password">

     <br>
     <br>


     Birthday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="date" class="Bdate" name="birthday" >


     

    <br>
    <br>

      Address:<br>
      <center class="center">

      <textarea class="text2" rows="5" cols="30" name="address"></textarea>

     </center>
     <br>
    
<div class="fix2">
      <button class="button" name="register">Register</button>

</div>

</div><!--forCenter class-->
      
    </fieldset>


  </form>

  
</div>






</body>
</html>