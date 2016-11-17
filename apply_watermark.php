<?php

$stamp = imagecreatefrompng($argv[1]);
$image = imagecreatefromjpeg($argv[2]);

$marge_right = 10;
$marge_bottom = 10;

$sx = imagesx($stamp);
$sy = imagesy($stamp);


imagecopy(
    $image,
    $stamp,
    imagesx($image) - $sx - $marge_right,
    imagesy($image) - $sy - $marge_bottom,
    0,
    0,
    imagesx($stamp),
    imagesy($stamp)
);


imagepng($image, __DIR__.'/results/'.$argv[2]);
imagedestroy($image);
