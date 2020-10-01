<?php
   
    $conn=new mysqli('sql204.epizy.com','epiz_26648055','6Dbe9DZPbfwnIyf','epiz_26648055_perfectcup');
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $messege=mysqli_real_escape_string($conn,$_POST['messege']);
    
    $email2="rainbowblossom793@gmail.com";
    $subject="Test Messege";
    $check="@";

    
    if(strlen($fname)>50){
        echo 'flong';
    }
    elseif(strlen($fname)<2){
        echo 'fshort';
    }
    elseif(strlen($email)<2){
        echo 'eshort';
    }
    elseif(strlen($email)>50){
        echo 'elong';
    }
    elseif(strpos($mail,$check)==false){
        echo 'eformat';
    }
    elseif(strlen($messege)<3){
        echo 'messege_short';
    }
    elseif(strlen($messege)>500){
        echo 'messege_long';
    }
    else{
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        // $mail->SMTPDebug=3
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='rainbowblossom793@gmail.com';
        $mail->Password='@Dipa24042001';
        $mail->SMTPSecure='tls';

        $mail->Port='587';
        $mail->setFrom($email2);
        $mail->addAddress('rainbowblossom793@gmail.com');
        $mail->AddReplyTo($email);  
        $mail->isHTML(true);
        $mail->Subject=$subject;
        $mail->Body=$messege;
        $mail->AltBody='This is the body in plaint text for non-HTML mail elements';

        if(!$mail->send()){
            echo 'Messege could not be send';
            echo 'Mailer Error:!'.$mail->ErrorInfo;
        }
        else{
            echo 'true';
        }
    }
?>