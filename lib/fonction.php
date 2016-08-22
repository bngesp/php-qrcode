<?php
include "phpqrcode/qrlib.php";

function genererQRCode($text){
	$output="qrcode.png";
	$qrcode=QRcode::png($text, $output);
	return $output;
}

