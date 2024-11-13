<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </link>
</head>

<body>
    <?php
    //echo "Your Form Submitted successfully";
    
    // if($_SERVER['REQUEST_METHOD']== "POST")
    // {
    //         $name = $dob = $gender = $email = $phoneNumber = $role = $comment ="";
    //         $nameError = $dobError = $genderError = $emailError = $phoneNumberError = $roleError = "";
    
    //         if(isset($_POST['name']) && !preg_match('/^[a-zA-Z]*$/',trim($_POST['name'])))
    //         {
    //             $nameError="Please enter proper name";
    //             //echo $nameError;
    //         }
    //         else if($_POST['name'] == ""){
    //             $nameError="Please enter proper name";
    //         }
    //         else{
    //             $name = $_POST['name'];
    //         }
    
    //         if(isset($_POST['dob']) && $_POST['dob'] == ""){
    //             $dobError="This is a required field!";
    //         }else{
    //             $dob = $_POST['dob']; 
    //         }
    
    //         if(!isset($_POST['gender'])){
    //             $genderError="This is a required field!";
    //         }else{
    //             $gender = $_POST['radio'];
    //         }
    
    //         if(isset($_POST['email']) && !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/',$_POST['email']))
    //         {
    //             $emailError="PLease enter a valid email address";
    //         }else if($_POST['email'] == ""){
    //             $emailError="PLease enter a valid email address";
    //         }else{
    //             $email = $_POST['email'];
    //         }
    
    //         if(isset($_POST['phonenumber']) && !preg_match('/^[0-9+ ]*$/',$_POST['phonenumber'])){
    //             $phoneNumberError="Please enter a valid phone number";}
    //         else if($_POST['phonenumber']=="" || strlen($_POST['phonenumber'])<10){
    //             $phoneNumberError="Please enter a valid phone number";
    //         }else{
    //             $phoneNumber = $_POST['phonenumber'];
    //         }
    

    //         if(isset($_POST['role']) && $_POST['role']==""){
    //             $roleError="This is a required field";
    //         }else{
    //             $role = $_POST['role'];
    //         }
    

    //         if(isset($_POST['comment']))
    //         {
    //             $comment = $_POST['comment'];
    //         }
    //         //
    //     }  
    
    // require 'formValidation.php';
    ?>
    <h1 style="text-align:center">Registration Form</h1>
    <p><?php
    // if (isset($_SESSION['error']) && $_SESSION['error'] == true) {
    //     echo "Enter all the required fields";
    // }
    ?></p>
    <div>
        <form method="POST" action="formValidation.php">
            <label for="fullname">Full Name:</label><br>
            <input type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>"><span>*</span><br>
            <?php $name_error = isset($_SESSION['nameError']) ? $_SESSION['nameError'] : ""; ?>
            <span><?php echo $name_error ?></span><br>

            <label for="birthday">Birthday:</label>
            <input type="date" name="dob" id="dob" value="<?php echo $_SESSION['dob']; ?>"><span>*</span>
            <span class="tab"></span>

            <label for="gender">Gender: </label>
            <input type="radio" name="gender" <?php if ($_SESSION['gender'] == "Male") {
                echo "checked";
            } ?> value="Male">
            <label for="male">Male</label>
            <input type="radio" name="gender" <?php if ($_SESSION['gender'] == "Female") {
                echo "checked";
            } ?>
                value="Female">
            <label for="female">Female</label><span>*</span>
            <br>
            <span><?php echo (isset($_SESSION['dobError']) ? $_SESSION['dobError'] : ""); ?></span>
            <span class="tab"
                style="display:inline-block; margin-left:180px"><?php echo (isset($_SESSION['genderError']) ? $_SESSION['genderError'] : ""); ?></span>
            <br>
            <br>

            <label for="email">Email:</label><br>
            <?php $email_error = isset($_SESSION['emailError']) ? $_SESSION['emailError'] : ""; ?>
            <input type="text" name="email" id="email" value="<?php echo $_SESSION['email']; ?>"><span>*</span>
            <br><span><?php echo $email_error ?></span><br>

            <label for="phonenumber">Phone Number:</label><br>
            <?php $phonenumber_error = isset($_SESSION['phonenumberError']) ? $_SESSION['phonenumberError'] : ""; ?>
            <input type="text" name="phonenumber" id="phonenumber"
                value="<?php echo $_SESSION['phonenumber']; ?>"><span>*</span><br>
            <span><?php echo $phonenumber_error ?></span><br>

            <label for="Role">Role:</label>
            <select name="role" id="role">
                <option value="">select</option>
                <option <?php if ($_SESSION['role'] == "Java")
                    echo "selected"; ?> value="Java">Java</option>
                <option <?php if ($_SESSION['role'] == "PHP")
                    echo "selected"; ?> value="PHP">PHP</option>
                <option <?php if ($_SESSION['role'] == "Javascript")
                    echo "selected"; ?>value="Javascript">Javascript
                </option>
            </select><span>*</span><br>
            <?php $role_error = isset($_SESSION['roleError']) ? $_SESSION['roleError'] : ""; ?>
            <span><?php echo $role_error ?></span><br>

            <textarea name="comment" id="comment" rows="3" placeholder="Comments if any"><?php $_SESSION['comment'] ?></textarea><br> <br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    session_destroy();
    ?>
</body>

</html>