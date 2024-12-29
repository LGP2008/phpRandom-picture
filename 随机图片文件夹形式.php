<?php
$img_array = glob("ECY/*.{gif,jpg,png}",GLOB_BRACE);
$img = array_rand($img_array);
$dz = $img_array[$img];
header("Location:".$dz);
?>