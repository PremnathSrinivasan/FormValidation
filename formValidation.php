<?php
session_start();
if($_SERVER['REQUEST_METHOD']== "POST")
{
        // $name = $dob = $gender = $email = $phoneNumber = $role = $comment ="";
        // $nameError = $genderError = $emailError = $phoneNumberError = $roleError = "";
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['gender'] = $_POST['radio'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phonenumber'] = $_POST['phonenumber'];
        $_SESSION['role'] = $_POST['role'];

        $_SESSION['error']=false;
        if(isset($_POST['name']) && !preg_match('/^[a-zA-Z]*$/',trim($_POST['name'])))
        {
            $_SESSION['nameError']="Please enter proper name";
            //echo $_SESSION['nameError'];
            $_SESSION['error']=true;
        }
        else if($_POST['name'] == ""){
            $_SESSION['nameError']="Please enter proper name";
            $_SESSION['error']=true;
        }
        else{
            $_SESSION['name'] = $_POST['name'];
        }

        if(isset($_POST['dob']) && $_POST['dob'] == ""){
            $_SESSION['dobError']="This is a required field!";
            $_SESSION['error']=true;
        }else{
            $_SESSION['dob'] = $_POST['dob']; 
        }
        
        if(!isset($_POST['gender'])){
            $_SESSION['genderError']="This is a required field!";
            $_SESSION['error']=true;
        }else{
            $_SESSION['gender'] = $_POST['gender'];
        }

        if(isset($_POST['email']) && !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/',$_POST['email']))
        {
            $_SESSION['emailError']="Please enter a valid email address";
            $_SESSION['error']=true;
        }else if($_POST['email'] == ""){
            $_SESSION['emailError']="Please enter a valid email address";
            $_SESSION['error']=true;
        }else{
            $_SESSION['email'] = $_POST['email'];
        }

        if(isset($_POST['phonenumber']) && !preg_match('/^[0-9+ ]*$/',$_POST['phonenumber'])){
            $_SESSION['phoneNumberError']="Please enter a valid phone number";
            $_SESSION['error']=true;}
        else if($_POST['phonenumber']=="" || strlen($_POST['phonenumber'])<10){
            $_SESSION['phoneNumberError']="Please enter a valid phone number";
            $_SESSION['error']=true;
        }else{
            $_SESSION['phonenumber'] = $_POST['phonenumber'];
        }


        if(isset($_POST['role']) && $_POST['role']==""){
            $_SESSION['roleError']="This is a required field";
            $_SESSION['error']=true;
        }else{
            $_SESSION['role'] = $_POST['role'];
        }


        if(isset($_POST['comment']))
        {
            $_SESSION['comment'] = $_POST['comment'];
        }

        if($_SESSION['error']==true){
            header("Location: registrationForm.php");
        }
        else{
            header("Location: formDBConnection.php");
        }
}  
