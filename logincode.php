<?php
session start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    
    $login_query - "SELECT * FROM users WHERE email-'$email' AND password-'$password' LIMIT 1";
    $login_query_run - mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run)> 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'],
            $user_id = $data['fname'],
            $user_id = $data['lname'],
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_id'=>$user_id,
        ];
    }
    else 
    {
        $_SESSION['message'] = "Invalid Email or Password";
        header("location:login.php");
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to access this file";
    header("location:login.php");
}
?>