<?php date_default_timezone_set('UTC+1');
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Galería de imágenes</title>
</head>

<body>
    <form action="subidaarchivos.php" method="POST" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file" /><br />
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $allowedExts = ["gif", "jpeg", "jpg", "png"];
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/x-png")
                || ($_FILES["file"]["type"] == "image/png"))
            && (($_FILES["file"]["size"] < 2000000))
            && in_array($extension, $allowedExts)
        ) {
            if ($myFile["error"] > 0) {
                echo "<br/>Error: " . $_FILES["file"]["error"] . "<br/>";
            } else {
                $ourImage = date("d.m.Y-H:m:s") . $_FILES["file"]["name"];
                echo "<br/>Upload: " . $ourImage . "<br/>";
                echo "Type: " . $_FILES["file"]["type"] . "<br/>";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . "<br/>";
                echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br/>";

                if (file_exists("upload/" . $ourImage)) {
                    echo $ourImage . " already exists.";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $ourImage);
                }
            }
        }
    }
    //Muestro imagenes
    foreach (scandir("./upload") as $value) {
        if ($value != "." && $value != "..") {
            echo "<img src=\"./upload/" . $value . "\">";
        }
    }

    ?>
</body>

</html>