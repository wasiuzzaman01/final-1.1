<?php
include("connection.php");
   
$msg='';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    $select1="SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $select_user = mysqli_query($conn,$select1);
    if(mysqli_num_rows($select_user)>0){
        $msg = "user already exist";
    }
    else{
        $insert1= "INSERT INTO `users`(`name`,`email`,`password`,`user_type`) VALUES ('$name','$email','$password','$user_type')";
        mysqli_query($conn,$insert1);
        header('location:login.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.main.css">
    <style>
       
    </style>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <h2>Registeration</h2>
            <p class="msg"><? '=$msg'?></p>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name" class="form-control" required=>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required=>
            </div>
            <div class="form-group">
                <select name="user_type" id="" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required=>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm your password" class="form-control" required=>
            </div>
            <button class="btn font-weight-bold" name="submit">Register now</button>
            <p>Already have an accounnt?<a href="login.php">Login now</a></p>
        </form>
    </div>
</body>
</html>