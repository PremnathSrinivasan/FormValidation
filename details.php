<?php
//test
session_start();
    // echo "success";
    // if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "Your Form Submitted successfully";
    $name = $dob = $gender = $email = $phoneNumber = $role = $comment ="";
    $name = $_SESSION['name'];
    $dob = $_SESSION['dob'];
    $gender = $_SESSION['gender'];
    $email = $_SESSION['email'];
    $phoneNumber = $_SESSION['phonenumber'];
    $role = $_SESSION['role'];
    $comment = $_SESSION['comment'];
        
        echo "The Inputs are <br> Full name: $name <br> Birthday: $dob <br> Gender: $gender <br>
            Email: $email <br> Phone number: $phoneNumber <br> Role: $role <br> Comment: $comment";

            
        session_destroy();
        /*function GetValues(){
            global  $name , $dob , $gender , $email , $phoneNumber , $role , $comment ;
            echo "The Inputs are <br> Full name: $name <br> Birthday: $dob <br> Gender: $gender <br>
            Email: $email <br> Phone number: $phoneNumber <br> Role: $role <br> Comment: $comment";
            test branch
        }
    }
    echo GetValues();*/
    // }
