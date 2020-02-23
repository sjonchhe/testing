<?php

    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['email'];
    $contact=$_POST['mobile'];

    $conn=mysql_connect("localhost","root","");


    $sel=mysql_select_db("mobilewe",$conn);

  mysql_query("insert into user_profiles values('$firstname','$lastname','$username','$password','$emailid','$contact')");



?>
