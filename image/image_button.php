<?php
# header 정보는 가장 먼저 나와야 한다. 공백 X
header("Content-type: image/png");
$string = $_GET['text'];
$im     = imagecreatefrompng("button.png"); # image create from png
$orange = imagecolorallocate($im, 60, 87, 156); # imagecolorallocate(이미지 식별자, Red, Green, Blue)
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;

imagestring($im, 4, $px, 9, $string, $orange);
imagepng($im);
imagedestroy($im);

?>