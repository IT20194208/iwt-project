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

   <center> <h1 style="color:white; font-family: monospace;">Account of Users</h1></center>

   <!--header below-->
 <?php 
 include("accountheader.php");
 ?>


<?php

    include('conn.php');
    $sqlget="SELECT * FROM register";
    $sqldata=mysqli_query($con,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>plan</th>
    <th>password</th>
    <th>person</th>
    <th>height</th>
    <th>weight</th>
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
        echo "</td><td>";
        echo $row['plan'];
        echo "</td><td>";
        echo $row['password'];
        echo "</td><td>";
        echo $row['person'];
        echo "</td><td>";
        echo $row['height'];
        echo "</td><td>";
        echo $row['weight'];
        ?>

        </td><td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="update.php?id=<?php echo $row['id'];?>">


          UPDATE

          </a>

        </button>

        </td><td>

        <button style = "border:2px solid yellow; border-radius:7px; background-color:red;color:white;" >
          <a href="delete.php?id=<?php echo $row['id'];?>">

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


  <!----------footer------------------------------------------------------------>
<?php 
 include("footer.php");
 ?>




</body>
</html>