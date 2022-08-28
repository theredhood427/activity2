<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
</head>
<body>

    <!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="uploader.php" method="POST">

    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />

    <input type="submit" value="Send File" />
</form>

</body>
</html>