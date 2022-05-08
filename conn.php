<?php


 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"online_fitness_trainer");

if($con){

	//echo "connected";
}
else
{
  echo "not connected";	
}


?>



