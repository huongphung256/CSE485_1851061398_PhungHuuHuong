<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
include("config.php");

if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    header("location: ../index.php");
    exit();
  }else{
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  }
  

  $mail=new PHPMailer();

  $mail->SMTPDebug = 3;                                 
  $mail->isSMTP();                                       
  $mail->Host = 'smtp.gmail.com;';                       
  $mail->SMTPAuth = true;                              
  $mail->Username = 'bacsiquaidi2k@gmail.com';               
  $mail->Password = '01239472711';                     
  $mail->SMTPSecure = 'tls';                          
  $mail->Port = 587;                                     
  $mail->setFrom($mail, 'admin');  
  $mail->addAddress('bacsiquaidi2k@gmail.com');                 
  $mail->isHTML(true);                                   
  $mail->Subject = $subject;  
  $mail->Body  = $fname . ' - ' . $lname . ' - ' . $message;  
  if($mail->send()){
    header("location: ../index.php");
    echo 'Message has been sent';  
  } else {  
    echo 'Message could not be sent';  
  }  
}
?>  