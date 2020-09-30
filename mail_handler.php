<?php

if (isset($_POST['submit'])){
    $emailaddress=$_POST['emailaddress'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $usermessage=$_POST['usermessage'];

    $to='ljubicicleona@gmail.com';
    $subject='Form Submission';
    $message="First name: ".$name."\n"."Last name: ".$lastname."\n". "Wrote the following: "."\n\n".$usermessage;
    $headers="Form: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Email sent successfully! Thank you!"." ".$name.", We will contact you as soon as possible.</h1>";
    }
    else{
        echo "Something went wrong!";
    }

}


?>