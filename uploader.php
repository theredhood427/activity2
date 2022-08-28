<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
</head>
<body>
<?php
    $destination = "C:/xampp/htdocs/fileuploader/uploads/" . $_FILES['userfile']['name'];

    $tmp = $_FILES['userfile']['tmp_name'];

    if(is_uploaded_file($tmp)){
        if (move_uploaded_file($tmp, $destination)){
            echo 'File is sucessfully uploaded';
            exit();
        }
    }
    echo 'Unable to upload file';
    ?>
    </body>
    </html>