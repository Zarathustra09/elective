<!DOCTYPE html>
<html>
<head>
    <title>FTP Upload GUI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<?php
	include ('includes/header.html');
  ?>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>FTP Upload GUI</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Select File:</label>
                        <input type="file" class="form-control-file" id="file" name="file" required>
                    </div>
                    <div class="form-group">
                        <label for="server">FTP Server:</label>
                        <input type="text" class="form-control" id="server" name="server" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
            <div class="card-footer">
                <?php

                 

                // Check if the FTP upload form is submitted
                if(isset($_POST['submit'])) {
                    $ftpServer = $_POST['server'];
                    $ftpUsername = $_POST['username'];
                    $ftpPassword = $_POST['password'];



                    $path = "/Electives/Admin_Records/";
                    // Connect to FTP server
                    $ftpConn = ftp_connect($ftpServer);
                    if($ftpConn) {
                        // Login to FTP server
                        $ftpLogin = ftp_login($ftpConn, $ftpUsername, $ftpPassword);
                        if($ftpLogin) {
                            // FTP login successful
                            echo "<h3>FTP login successful!</h3>";

                            // Upload file
                            
                            $file = $_FILES['file']['tmp_name'];
                            $fileName = $_FILES['file']['name'];
                            

                            $upload = ftp_put($ftpConn, $fileName , $file, FTP_BINARY);
                            if($upload) {
                                echo "<h4>File uploaded successfully: $fileName</h4>";
                            } else {
                                echo "<h4>Failed to upload file: $fileName</h4>";
                            }

                            // Close FTP connection
                            ftp_close($ftpConn);
                        } else {
                            echo "<h3>FTP login failed. Please check your credentials.</h3>";
                        }
                    } else {
                        echo "<h3>Failed to connect to FTP server.</h3>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
	include ('includes/footer.html');
  ?>
</body>
</html>
