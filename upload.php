<?php

    require_once('sql_conn.php');

    if(isset($_POST['submit'])) {
        $image = $_FILES['image'];
        $allowed = array('JPG', 'jpg', 'jpeg','png','gif');
        $file_type = pathinfo($image['name'], PATHINFO_EXTENSION);

        if (!in_array($file_type, $allowed)) {
            die("Invalid file type");
        }

        $imagePath = './images/' . basename($image['name']);
        if(!move_uploaded_file($image['tmp_name'], $imagePath)){
            die("Error uploading file");
        }

        $query = "INSERT INTO images (image) VALUES ('$imagePath')";

        if(!mysqli_query($dbc, $query)) {
            die('Error inserting into database');
        }

        $response = mysqli_query($dbc, "SELECT image FROM images ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_assoc($response);
        $imagePath = $row['image'];

        header('Content-Type: image/jpeg');
        echo file_get_contents($imagePath);
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" value="" multiple="">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>