<?php
$link = mysqli_connect("localhost", "root", "");

if($link === false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

$sql = "CREATE DATABASE demo";
if(mysqli_query($link,$sql)) {
    echo "Database Created Successfully";
}
else {
    echo "ERROR: Could not be able to execute $sql. ". mysqli_error($link);
}

mysqli_close($link);
?>