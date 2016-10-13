<?php

header("Content-type: image/png");

isset($_GET['ms']) OR $_GET['ms'] = "0";
isset($_GET['d']) OR $_GET['d'] = "";
isset($_GET['s']) OR $_GET['s'] = "16";
isset($_GET['x']) OR $_GET['ms'] ? $_GET['x'] = '20' : $_GET['x'] = '245';
isset($_GET['y']) OR $_GET['ms'] ? $_GET['y'] = '10' : $_GET['y'] = '24';
isset($_GET['b']) OR $_GET['b'] = "0";
isset($_GET['b']) OR $_GET['i'] = "0";

$_GET['ms'] ? $im = imagecreatefrompng("logo-ms.png"): $im = imagecreatefrompng("logo-opaque.png");
$gray   = imagecolorallocate($im, 64, 64, 64);
$_GET['i'] ? $font = './ariali.ttf' : $font = './arial.ttf';
$_GET['b'] ? $font = './arialbd.ttf' : false;
$_GET['i'] AND $_GET['b'] ? $font = './arialbi.ttf' : false;

imagettftext($im, intval($_GET['s']), 0, intval($_GET['x']), imagesy($im) - intval($_GET['y']), $gray, $font, $_GET['d']);
imagepng($im);
imagedestroy($im);
