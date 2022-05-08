<!DOCTYPE html>
<html>
<head>
	
	<title>payment details</title>
	

<link rel="stylesheet" type="text/css" href="cssfile/payment.css"><!--link as external way-->
<link rel="stylesheet" type="text/css" href="cssfile/search_box.css">  

</head>
<body>

  <div style="color:red; background-color: black;">

    <?php

    if(isset($_POST['submit'])){

     $plan=$_POST['plan'];
     $method=$_POST['method'];
     $holder=$_POST['holder'];
     $number=$_POST['num'];
     $amount=$_POST['amount'];
     $date=$_POST['dat'];
     $cv=$_POST['cv'];

     
    


    $conn=new mysqli('localhost','root','','online_fitness_trainer');


       if($conn->connect_error)
          {
            die('Connection Faild :'.$conn->connect_error);
          }
          else
          {

                         if(strlen($number)>5)
                         {

                          $number=md5($number);//encrypted//

              $stmt=$conn->prepare("INSERT INTO payment(plan,method,holder,num,amount,dat,cv) VALUES(?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssssisi",$plan,$method,$holder,$number,$amount,$date,$cv);

              $stmt->execute();
              echo "payment successfully!";

              $stmt->close();
              $conn->close();
              }
              else
              {
                echo "invaild name!";
              }




          }
          
      }     
  


    ?>
    

    </div>





  <center><img src="../fitness_trainer/picturee/logo.png" width="120"></center>

	<h1 class="h1class">Payment Details</h1>

<!--header below-->
 <?php 
 include("navBar.php");
 ?>




  <fieldset>

    <div class="div1">


  <form action="payment_deatails.php" method="post">


    <h2 class="h2class">Payment</h2>

    <br>

<div class="div2" >
    CHOOSE YOUR PLAN:&nbsp;
    <select class="plan" name="plan" required>

      <option>1month</option>
       <option>2month</option>
        <option>3month</option>
         <option>4month</option>



    </select>


  <br>
  <br>

   PAYMENT METHOD:&nbsp;&nbsp;
    <select class="pmethod" name="method" required>

      <option>Credit</option>
       <option>Debit</option>
       
        



    </select>

    <br>
    <br>
    CARD HOLDER NAME:&nbsp;<input type="text" class="hname" name="holder" placeholder="holdername">
    <br>
    <br>
    CARD NUMBER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="number" class="hname" name="num" placeholder="card number">
    <br>
    <br>
    ENTER AMOUNT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" class="amount" placeholder="input amount" name="amount" required>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    EXPIRY DATE:&nbsp;<input type="date" name="dat" class="edate" required>
    <br>
    <br>
    ENTER CV NUMBER:&nbsp;&nbsp;&nbsp;<input type="number" name="cv" id="cv1" placeholder="CV" required>
    <br>
    <br>
    <input type="submit" class="submit" name="submit" value="PAY">



</div>

  </form>

</div>

 </fieldset>




</body>
</html>