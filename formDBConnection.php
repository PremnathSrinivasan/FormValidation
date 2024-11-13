<?php 
session_start();

$server = "localhost";
$username = "admin";
$password = "root123";
$db = "form";

try 
{
    $conn = new mysqli($server,$username,$password,$db );
    if(!$conn->connect_error)
    {
        $insertQuery = $conn->prepare("INSERT INTO user_details(name,dob,gender,email,phone_number,role,comments)
                        VALUES(?,?,?,?,?,?,?)");
        $insertQuery->bind_param("sssssss",$_SESSION['name'],$_SESSION['dob'],$_SESSION['gender'],
                                $_SESSION['email'],$_SESSION['phonenumber'],$_SESSION['role'],$_SESSION['comments']);

        $insertQuery->execute();

        //echo "<br> Values are inserted into the table";
        echo "<h2> Form Submitted Successfully! </h2>";
        session_destroy();
    }
        
} catch (Exception $exception) {
        if($exception->getCode() == 1062){
            echo "<h2> Form already Submitted! </h2>";
        }
        else throw new Exception("ERROR");
}catch(Exception $ex)
{
    echo $ex->getMessage();
}
    



