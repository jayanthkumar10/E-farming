<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "CMS";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'txt', 'docx', 'exe', 'zip', 'rar', 'pptx', 'ppt', 'mp3', 'mp4', 'mpk');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                
                move_uploaded_file($fileTmpName, 'uploads/'.$fileNameNew);
                header("Location: index.php?fileuploadsuccess");
            }else{
                echo "Your file is too big!";
            }    
        }else{
            echo "There was an error uploading your file!"; 
        }
    } else{
        echo "You cannot upload files of this type!";
    }
}