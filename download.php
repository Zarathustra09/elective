<?php

session_start();
$user = $_SESSION['user'];

if($user == "Admin"){
    $directory = "/Electives/Admin_Records";
}
elseif($user == "User") {
    $directory = "/Electives/Employee_Records";
}

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = $directory . '/' . $file;

    if (file_exists($filePath)) {
        // File download successful
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . basename($filePath) . "\"");
        readfile($filePath);
        exit();
    } else {
        // File does not exist
        echo "File not found.";
    }
} else {
    echo "Invalid file.";
}
?>
