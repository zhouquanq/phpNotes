<?php
    require("upload_img.php");

    $source = './123.png';
    $dst_img = './upfiles/123.png'; //可加存放路径
    $percent = 1;  #原图压缩，不缩放
    $image = (new imgcompress($source, $percent))->compressImg($dst_img);

?>

