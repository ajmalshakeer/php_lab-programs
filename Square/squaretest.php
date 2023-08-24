<?php
require"square.php";
$obj=new Square;
// echo "the value before initializing: ".$obj -> length."<br>";
$obj -> length=5;
echo "length of the square is: ".$obj -> length."<br>";
echo "perimeter of the square is: ".$obj -> getperi()."<br>";
echo "area of the square is: ".$obj -> getarea()."<br>";
?>