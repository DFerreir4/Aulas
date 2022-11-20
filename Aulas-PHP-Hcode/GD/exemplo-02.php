<?php

$image = imagecreatefromjpeg("certificado.jpg");
//repetições de números que geram tons cinza
$titleColor = imagecolorallocate($image, 0 , 0 ,0);
$gray = imagecolorallocate($image, 100, 100, 100);
//escrevendo na imagem
imagestring($image,5 , 450, 150, "CERTIFICADO", $titleColor);
imagestring($image,5 , 440, 350, "Diego Ferreira", $titleColor);
imagestring($image,3 , 440, 370, utf8_decode("Concluido em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-" . date("Y-m-d") .".jpg");

imagedestroy($image);


?>