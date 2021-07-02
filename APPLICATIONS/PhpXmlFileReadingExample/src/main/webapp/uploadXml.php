<?php
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 3:33 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<?php
$allowedExts = array("xml", "XML");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "text/xml")
        || ($_FILES["file"]["type"] == "application/xml"))
    && ($_FILES["file"]["size"] < 20000)
    && in_array($extension, $allowedExts)
) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        if (file_exists("c:\\MYHOME\\new" . $_FILES["file"]["name"])) {
            echo "c:\\MYHOME\\new" . $_FILES["file"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "c:\\MYHOME\\new" . $_FILES["file"]["name"]);
            echo "Stored in: " . "c:\\MYHOME\\new" . $_FILES["file"]["name"];

            $xml = simplexml_load_file("c:\\MYHOME\\new" . $_FILES["file"]["name"]);
            echo $xml->getName() . "<br>";

            foreach ($xml->children() as $child) {
                echo $child->getName() . ": " . $child . "<br>";
            }
        }
    }
} else {
    echo "Invalid file";
}
?>