<?php
// print_r($_FILES['fileUpload']);
// echo " <br>";


if ($_FILES['fileUpload']) {
    $path = $_FILES['fileUpload']['name'];
    echo " <br>";
    $upload_path = "./uploads/" . $path;

    if (
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) || die("Failed to uplaod")
    ) {

        echo "File Successfully Upload";
    } else {
        die ("Failed to upload file ") ; 
    }


    //  echo $path ; 
    //  echo $upload_path ; 
} else {
    die("No File Found");
}
