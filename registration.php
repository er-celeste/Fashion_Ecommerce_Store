<?php

session_start();

//connect database
$con= mysqli_connect('localhost','root','');

//select database
mysqli_select_db($con,'site_user_registration');


                $name = $_POST['user'];
                $pass = $_POST['password'];

                $s = "select * from usertable where Name='$name'";

                $result = mysqli_query($con, $s);

                $num = mysqli_num_rows($result);

                if ($num==1){
                    echo "Username Already Taken";
                }else{

                    $reg = "INSERT INTO `usertable` (`Name`, `Password`) VALUES ('$name', '$pass')";
                    mysqli_query($con, $reg);

                    echo "You've been registered successfully.";
                    header('location:login.php');

                }
