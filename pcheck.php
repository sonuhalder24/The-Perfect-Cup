<?php
     session_start();
     $email=$_POST["email"];
     $password=$_POST["password"];

     $conn=new mysqli("sql204.epizy.com","epiz_26648055","6Dbe9DZPbfwnIyf","epiz_26648055_perfectcup");
     if($conn->connect_error){
         die("Connection failed:".$conn->connect_error);
     }

     $sql="SELECT * FROM members WHERE email='$email'";
     $result=mysqli_query($conn,$sql) or die (mysqli_error());
     $num_row=mysqli_num_rows($result);
     $row=mysqli_fetch_array($result);

     if($num_row>=1){
        if(password_verify($password,$row['password'])){
            $_SESSION['login']=$row['id'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            echo 'true';
        }
        else{
            echo 'false';
        }
    }
    else {
        echo 'false';
    }
  

 
?>