<?php
    session_start();
    require_once 'config/connection.php';


    if(isset($_POST['signupBtn'])){ 
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM employee_login WHERE username = ? Limit 1";
        // $adminQuery = "SELECT userType FROM student_info WHERE username = ? Limit 1";

        // $stmt2 = $connection -> prepare($adminQuery);
        // $stmt2 -> bind_param('s',$username);
        // $stmt2 -> execute();
        // $result2 = $stmt -> get_result();
        // $user2 = $result -> fetch_assoc();

       



        $stmt = $connection -> prepare($sql);
        $stmt -> bind_param('s',$username);
        $stmt -> execute();
        $result = $stmt -> get_result();
        $user = $result -> fetch_assoc();


        if(hash('md5',$password) == $user['password'] and $user['userType'] == "User"){
            header("location: index.php");
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user'] = $user['userType'];
            

        }
        elseif(hash('md5',$password) == $user['password'] and $user['userType'] == "Admin"){
            header('location: adminIndex.php');
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user'] = $user['userType'];
        }
       
    }

?>











<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .login-box {
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .login-box h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-control {
            padding-top: 10px;
            padding-bottom: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
        }
        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .form-control:focus + .form-label {
            transform: translateY(-30px);
            font-size: 12px;
            color: #888;
        }
        .form-label {
            position: absolute;
            top: 10px;
            left: 0;
            font-size: 16px;
            color: #555;
            pointer-events: none;
            transition: 0.2s ease all;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" required="required">
                <label class="form-label">Username</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" required="required">
                <label class="form-label">Password</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" style ="background: #A020F0" name ="signupBtn">Login</button>
            </div>
        </form>
        <p class="text-center">Don't have an account? <a href="registration.php">Register</a></p>
    </div>
</body>
<br>
<footer class="text-center">
    <p>Copyright &copy; 2023 All rights reserved by Group 2.</p>
</footer>
</html>
