<?php

$file = $_FILES['file2'];
$filename = $_FILES['file2']['name'];
$tmpfilename = $_FILES['file2']['tmp_name'];
$fileext = explode('.',$filename);
$fileactualext = strtolower(end($fileext));
$filenamenew = uniqid('',true).".".$fileactualext;
$filedestination = 'uploads/'.$filenamenew;

        if(move_uploaded_file($tmpfilename,$filedestination))
        {
            echo 'File uploaded successfully';
        }


?>