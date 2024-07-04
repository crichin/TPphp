<?php

require_once "phpqrcode/qrlib.php";

function qrCode(string $text, string $filename, string $path) {

    $file = $path . "/" . $filename;
 

    $ecc = 'H'; 
    $pixel_size = 20; 
    $frame_size = 5;

    QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);

   return $file;
}



?>