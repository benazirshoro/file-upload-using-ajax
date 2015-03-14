<?php
/**
 * Created by: Benazir Shoro
 * Date: 3/14/2015
 * Time: 17:16 PM
 */

if($_FILES['file']['size'] > 0){
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_ext = $_FILES['file']['ext'];
    if($file_ext == "jpg" || $file_ext == "gif"){
        move_uploaded_file($file_tmp_name,$file_name);

    //you can also add the file name in database if required
        echo "File successfully uploaded";
    } else{
        echo "Sorry, file extension is not correct";
    }
} else{
    echo "Please upload a file";
}
?>