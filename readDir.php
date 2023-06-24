<?php
    session_start();
    require_once 'config/connection.php';
    $user = $_SESSION['user'];

?>





<!DOCTYPE html>
<html>
<head>
    <title>Local File List</title>
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
        <h1>Local File List</h1 >
        <table class="table table-striped" style="overflow: auto;">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($user == "Admin"){
                    $directory = "C:\Electives\Admin_Records";
                }
                else{
                    $directory = "C:\Electives\Employee_Records";
                }
                

                // Get file list
                $files = scandir($directory);

                // Display the file list
                
                if (!empty($files)) {
                    foreach ($files as $file) {
                        if ($file != "." && $file != "..") {
                            echo "<tr>";
                            echo "<td>$file</td>";
                            echo "<td><a href='download.php?file=" . urlencode($file) . "' class='btn btn-primary btn-sm'>Download</a></td>";
                            echo "</tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='2'>No files found in the directory.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br>
    <?php
	include ('includes/footer.html');
  ?>
</body>
</html>
