<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 1:43 PM
 * To change this template use File | Settings | File Templates.
 */
 -->

<?php
$allowedExtension = array("gif", "jpeg", "jpg", "png", "zip", "JPG", "JPEG", "GIF", "PNG", "ZIP");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "application/zip")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 20000)
    && in_array($extension, $allowedExtension)
) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        if (file_exists("c:/MYHOME/" . $_FILES["file"]["name"])) {
            echo "c:/MYHOME/" . $_FILES["file"]["name"] . " already exists. ";

        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "c:/MYHOME/" . $_FILES["file"]["name"]);
            echo "Stored in: " ."c:/MYHOME/" . $_FILES["file"]["name"];
        }
    }
} else {
    echo "Invalid file";
}
?>