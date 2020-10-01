<?php
    session_start();
    $servername="sql204.epizy.com";
    $username="epiz_26648055";
    $password="6Dbe9DZPbfwnIyf";
    $dbname="epiz_26648055_perfectcup";
    $check="@";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

    $fname=mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname=mysqli_real_escape_string($conn,$_POST["lname"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);;
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

    // Validation
    if(strlen($fname)<2){
        echo 'fname';
    }
    elseif(strlen($lname)<2){
        echo 'lname';
    }
    elseif(strlen($email)<=4){
        echo 'eshort';
    }
    elseif(strpos($email,$check)==false){
        echo 'eformat';
    }
    elseif(strlen($password)<4){
        echo 'pshort';
    }
    else {
        // Password encrypt
        $spassword=password_hash($password,PASSWORD_BCRYPT,array('cost'>=12));

        $sql="SELECT * FROM members WHERE email='$email'";
        $result=mysqli_query($conn,$sql) or die (mysqli_error());
        $num_row=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
         
        if($num_row<=1){
            $insert_row=$conn->query("INSERT INTO members (fname,lname,email,password) VALUES ('$fname','$lname','$email','$spassword')");
            if($insert_row){
                $_SESSION['login']=$conn->insert_id;
                $_SESSION['fname']=$fname;
                $_SESSION['lname']=$lname;
                mailer($email,'Welcome mail',"You are most welcome to the Perfect Cup!!");
                echo 'true';
            }
        }
        else {
            echo 'false';
        }
    }
    function mailer($to,$subject,$msg){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
    
    
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;                               
        $mail->Username = 'rainbowblossom793@gmail.com';                 
        $mail->Password = '@Dipa24042001';                           
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;                                    
    
        $mail->setFrom('collegeVibes@gmail.com');
        $mail->addAddress($to);     
        $mail->addReplyTo('info@example.com', 'Information');
           
        $mail->isHTML(true);                                  
    
        $mail->Subject = $subject;
        $mail->Body    = $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
    
       }
?>
