<?php

    
	 
    require_once 'config/connection.php';
    error_reporting(E_ERROR | E_PARSE);
	 
    
    $errors = array();


    if(isset($_POST['registerBtn'])){
      

        $name = $_POST['name'];

        $username = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $department = $_POST['department'];

        $password = hash('md5',$password);
       

      //validation
    //   if (empty($username)) {
    //     array_push($errors,"username");
        
    //   }
    //   if (empty($password)) {
    //     array_push($errors,"username");
    //   }
    //   if (empty($fname)) {
    //     array_push($errors,"username");
    //   }
    //   if (empty($lname)) {
    //     array_push($errors,"username");
    //   }
    //   if (empty($sectionName)) {
    //     array_push($errors,"username");
    //   }
    //   if (empty($contactNumber)) {
    //     array_push($errors,"username");
    //   }
    //   if(empty($password)){
    //     array_push($errors,"username");
    //   }


        $insertQuery = "INSERT INTO employee_login(name, username, password, age, sex, department) VALUES (?,?,?,?,?,?)";
        $stmt = $connection -> prepare($insertQuery); 
        $stmt -> bind_param('ssssss',$name, $username, $password,$age,$sex, $department);
  
         if($stmt -> execute()){
          
              header('location: login.php');
              

        }
        else{
          include 'includes/fields.php';

        }
    
      
      }

?>

























<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .registration-box {
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .registration-box h2 {
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
    <div class="registration-box">
        <h2>Registration</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" required="required">
                <label class="form-label">Name</label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" required="required">
                <label class="form-label">Username</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" required="required">
                <label class="form-label">Password</label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" required="required">
                <label class="form-label">Age</label>
            </div>
            <div class="form-group">
                <select class="form-control" name="sex" required="required" style="font-size: small">
                 
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Binary">Binary</option>
                    <option value="Non-Binary">Non-Binary</option>
                    <option value="Attack Helicoper">Attack Helicoper</option>
                    <option value="Other">Other</option>
                </select>
              
            </div>

            <div class="form-group">
                <select class="form-control" name="department" required="required" style="font-size: small">
                 
                    <option value="Human Resource">Human Resource</option>
                    <option value="Production">Production</option>
                    <option value="Research and Development">Research and Development</option>
                    <option value="Finance">Finance</option>
                
                </select>
              
            </div>
    
            <div class="form-group" >
                <button type="submit" class="btn btn-primary btn-block" style ="background: #A020F0" name = "registerBtn">Register</button>
            </div>
        </form>
    </div>
    <br>
    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
</body>
<br><br>

</html>
