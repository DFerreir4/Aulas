<?php
//mudar o tipo de resposta desse arquivo
header("Content-Type: image/png");

$image = imagecreate(256, 256);
// a primeira é a cor do fundo
$black = imagecolorallocate($image, 0, 0, 0); // padrão rgb
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);


?>