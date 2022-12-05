<?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $to='bikashsahoo548@gmail.com';
    $subject2='Form Submission';
    $message2="Name: ".$name. "\n"."Subject: ".$subject. "\n". "Wrote the following: "."\n\n" .$message;
    $headers="From: ".$email;

    if(mail($to, $subject2, $message2, $headers)){
        echo "Sent Successfully! Thank You"." ".$name.", We will contact you shortly!";
    }
    else{
        echo "Something went wrong!";
    }
 }
?>