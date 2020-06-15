<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
</head>
<body>
    <?php
        if (isset($_SESSION['message']) && $_SESSION['message']) {
            printf('<b>%s</b>', $_SESSION['message']);
            unset($_SESSION['message']);
        }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <span>Upload File :</span>
            <input type="file" name="uploadedFile" id="">
        </div>
        <input type="button" name="uploadBtn" value="Upload">
    </form>
</body>
</html>