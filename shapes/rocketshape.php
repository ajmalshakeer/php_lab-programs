<?php
// Create a blank image with a white background
$width = 400;
$height = 400;
$image = imagecreatetruecolor($width, $height);
$background = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background);

// Colors
$red = imagecolorallocate($image, 255, 0, 0);

// Triangle points
$point1 = array("x" => $width / 2, "y" => 150);
$point2 = array("x" => 150  , "y" => $height - 150);
$point3 = array("x" => $width - 150, "y" => $height - 150);

// Draw triangle
imagefilledpolygon($image, array(
    $point1["x"], $point1["y"],
    $point2["x"], $point2["y"],
    $point3["x"], $point3["y"]
), 3, $red);


// rectangle(body of rocket)
$rectangleColor = imagecolorallocate($image, 12, 53, 136);
imagefilledrectangle($image, 150, 250, 250, 390, $rectangleColor);
imagestring($image, 4, 60, 160,'Rectangle',$rectangleColor);

// circle inside the body
$circleColor = imagecolorallocate($image, 0, 0, 0);
$circleCenterX = 200;
$circleCenterY = 290;
$circleRadiusW = 55;
$circleRadiusH = 55;   
imagefilledellipse($image, $circleCenterX, $circleCenterY,
$circleRadiusW, $circleRadiusH, $circleColor);
imagestring($image, 2, 250, 160,'Circle',$circleColor);

//colour inside body 2
$circleColor = imagecolorallocate($image, 0, 0, 0);
$circleCenterX = 200;
$circleCenterY = 350;
$circleRadiusW = 55;
$circleRadiusH = 55;   
imagefilledellipse($image, $circleCenterX, $circleCenterY,
$circleRadiusW, $circleRadiusH, $circleColor);
imagestring($image, 2, 250, 160,'Circle',$circleColor);

// square inside circle in the body
$rectangleColor = imagecolorallocate($image, 155, 53, 136);
imagefilledrectangle($image, 190, 280, 210, 300, $rectangleColor);
imagestring($image, 4, 60, 160,'Rectangle',$rectangleColor);

// square inside circle in the body2
$rectangleColor = imagecolorallocate($image, 155, 53, 136);
imagefilledrectangle($image, 190, 340, 210, 360, $rectangleColor);
imagestring($image, 4, 60, 160,'Rectangle',$rectangleColor);


// Output image
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
?>
