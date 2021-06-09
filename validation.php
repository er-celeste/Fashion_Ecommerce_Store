<?php

session_start();


//connect database
$con= mysqli_connect('localhost','root','');

//select database
mysqli_select_db($con,'site_user_registration');


            $name = $_POST['user'];
            $pass = $_POST['password'];

            $s = "select * from usertable where Name='$name' && Password = '$pass'";

            $result = mysqli_query($con, $s);

            $num = mysqli_num_rows($result);

            if ($num==1){

                header('location:index.php');


            }else{
                header('location:login.php');

                echo "You've been registered successfully.";
            }
