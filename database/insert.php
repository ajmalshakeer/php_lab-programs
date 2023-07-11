<?php
$link = mysqli_connect("localhost", "root","", "demo");

if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$sql = "INSERT INTO user (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)) {
    echo "Records added successfully.";
}
else {
    echo "ERROR: Can't able to execute $sql " . mysqli_error($link);
}

mysqli_close($link);
?>