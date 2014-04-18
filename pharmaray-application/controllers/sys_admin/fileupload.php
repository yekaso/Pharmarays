<?php

$upload_dir = "../../../pharma-public/upload/";
extract($_POST);
if (isset($_FILES["myfile"])) {
    if ($_FILES["myfile"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
        move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_dir . $file_name);
        //echo "Uploaded File :" . $_FILES["myfile"]["name"];
    }
}
?>