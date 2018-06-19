<?php

$imageDir = './';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];

return $randomImage;

?>
