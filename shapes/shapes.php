<?php

$width = 400;
$height = 300;
$image = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);

//rectangle
$rectangleColor = imagecolorallocate($image, 0, 0, 255);
imagefilledrectangle($image, 50, 50, 200, 150, $rectangleColor);
imagestring($image, 4, 60, 160,'Rectangle',$rectangleColor);


// circle
$circleColor = imagecolorallocate($image, 255, 0, 0);
$circleCenterX = 300;
$circleCenterY = 150;
$circleRadiusW = 100;
$circleRadiusH = 100;   
imagefilledellipse($image, $circleCenterX, $circleCenterY,
$circleRadiusW, $circleRadiusH, $circleColor);
imagestring($image, 4, 250, 160,'Circle',$circleColor);

// ellipse
$ellipseColor = imagecolorallocate($image, 0, 155, 45);
imagefilledellipse($image, 150, 250, 150, 80, $ellipseColor);
imagestring($image, 4, 110, 260,'Ellipse', $ellipseColor);

// output and cleaningup
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>