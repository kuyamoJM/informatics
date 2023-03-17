<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    if($password == $confirm_password)
    {
        //Check Email
        $checkemail = "SELECT email FROM users WHERE email = '$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            // Already Email Exixts
            $_SESSION['message'] = "Email is Already Exists";
            header("Location: register.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fname,username,email,password) VALUES ('$fname','$username','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: register.php");
                exit(0);
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password does not match";
        header("Location: register.php");
        exit(0);
    }
}
else{
    header("Location: register.php");
    exit(0);
}




?>