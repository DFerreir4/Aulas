<?php

$fileName = "html5.png";

$base64 = base64_encode(file_get_contents($fileName));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileInfo->file($fileName);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>


<a href="<?=$base64encode?>" target="_black">Link para imagem</a>

<img src="<?=$base64encode?>">