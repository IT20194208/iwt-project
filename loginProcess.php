<?php session_start();

include('conn.php');

if(isset($_POST['submit1']))
{

$user_unsafe=$_POST['firstname'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);
//consider firstname as username//
$query=mysqli_query($con,"select * from register where firstname='$user' and password='$pass'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
           
           $name=$row['firstname'];
           $counter=mysqli_num_rows($query);
           $id=$row['id'];
           
        if ($counter == 0) 
          { 
          echo "<script type='text/javascript'>alert('Invalid Firstname or Password!');
          document.location='sign in and sign up.php'</script>";
          } 
      else
          {

        $_SESSION['id']=$id;    
        $_SESSION['firstname']=$name;
    
            
        echo "<script type='text/javascript'>document.location='useraccount.php'</script>";
      }
}    
?>

