<?php

namespace Cainallah;

use Cainallah\Generate;

include "crud.php";

if (isset($_POST['firstName'])) {

    $crud = new Crud();

    if ($_POST['firstName'] != '' && $_POST['lastName'] != '' && $_POST['age'] != '' && $_POST['email'] != '' && $_POST['phoneNumber'] != '') {
        
       //start apload mage file 
       $target_dir = "../uploads/";
       $target_file = $target_dir . basename($_FILES["image"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
       // Check if image file is a actual image or fake image
      
       $check = getimagesize($_FILES["image"]["tmp_name"]);
       if ($check !== false) {
           echo "File is an image - " . $check["mime"] . ".";
           $uploadOk = 1;
       } else {
           echo "File is not an image.";
           $uploadOk = 0;
       }
       
       // Check if file already exists
       if (file_exists($target_file)) {
           echo "Sorry, file already exists.";
           $uploadOk = 0;
       }
       
       // Check file size
       if ($_FILES["image"]["size"] > 500000) {
           echo "Sorry, your file is too large.";
           $uploadOk = 0;
       }
       
       // Allow certain file formats
       if (
           $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif"
       ) {
           echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
           $uploadOk = 0;
       }
       
       // Check if $uploadOk is set to 0 by an error
       if ($uploadOk == 0) {
           echo "Sorry, your file was not uploaded.";
           // if everything is ok, try to upload file
       } else {
           if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
               echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
           } else {
               echo "Sorry, there was an error uploading your file.";
           }
       }
       
    
       //end apload mage file
         
       $array = array(
        ':firstName' => $_POST['firstName'],
        ':lastName' => $_POST['lastName'],
        ':age' => $_POST['age'],
        ':email' => $_POST['email'],
        ':phoneNumber' => $_POST['phoneNumber'],
        ':picture_path' => $target_file
    );

        $inserted = $crud->create("insert into users (FirstName, LastName, age, email, PhoneNumber, picture_path) value (:firstName,:lastName,:age,:email,:phoneNumber,:picture_path)", $array);
        if ($inserted == "true") {
            echo $inserted;
        } else {
            echo " $inserted";
        }
    }
} else {
    echo "wa smaaa7 liya a bro";

}
