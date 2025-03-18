<?php
// Generate PWA icons from logo
$source = 'images/logo.png';
$sizes = [192, 512];

foreach ($sizes as $size) {
    $im = imagecreatefrompng($source);
    $newImg = imagecreatetruecolor($size, $size);
    imagealphablending($newImg, false);
    imagesavealpha($newImg, true);
    imagecopyresampled($newImg, $im, 0, 0, 0, 0, $size, $size, imagesx($im), imagesy($im));
    imagepng($newImg, "images/icon-{$size}.png");
}
