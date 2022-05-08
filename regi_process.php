<?php 


    if(isset($_POST['submit'])){

         $firstname=$_POST['first_name'];
         $lastname=$_POST['last_name'];
         $tel=$_POST['phone'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $con_password=$_POST['confirm_password'];

        
        $conn=new mysqli('localhost','root','','musify');

       

        
        if($conn->connect_error)
                    {
                        die('Connection Faild :'.$conn->connect_error);
                    }
                    else
                    {

                           if(strlen($firstname)>4)
                           {

                            $stmt=$conn->prepare("INSERT INTO musify_register(firstname,lastname,tel,email,password,con_password) VALUES(?,?,?,?,?,?)");
                            //table3 is the table name//

                            $stmt->bind_param("ssssss",$firstname,$lastname,$tel,$email,$password,$con_password);

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
