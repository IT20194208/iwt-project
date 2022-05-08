<!DOCTYPE html>
<html>
<head>
  



  <link rel="stylesheet" type="text/css" href="cssfile/account.css">
  <link rel="stylesheet" type="text/css" href="cssfile/generalall.css">
 
  <link rel="stylesheet" type="text/css" href="cssfile/footercss.css">


    <meta charset="utf-8">
    <title>account</title>
</head>
<body>

   <center> <h1 style="color:white; font-family: monospace;">Account of trainer</h1></center>

   <!--header below-->
 <?php 
 include("accountheader.php");
 ?>


<?php

    include('conn.php');
    $sqlget="SELECT * FROM trainerregister";
    $sqldata=mysqli_query($con,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>update</th>
    <th>delete</th>

   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['firstname'];
        echo "</td><td>";
        echo $row['lastname'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td>";
          
        ?>

        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="updatetrainer.php?id=<?php echo $row['id'];?>">


          UPDATE

          </a>

        </button>

        </td><td>

        <button style = "border:2px solid yellow; border-radius:7px; background-color:red;color:white;" >
          <a href="deletetrainer.php?id=<?php echo $row['id'];?>">

            DELETE

        </a>
       </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>





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