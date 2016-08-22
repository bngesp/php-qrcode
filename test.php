<?php
include "lib/qrlib.php";

// create a QR Code with this text and display it
$qrcode=QRcode::png("http://www.sitepoint.com");
var_dump($qrcode);die;
 
