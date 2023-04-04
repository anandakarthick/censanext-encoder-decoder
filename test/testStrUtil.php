<?php
/**
 * Created by AnandaKarthick.
 * Date: 04/04/2023
 * Time: 19:03
 */
//Use composer autoload to load class files
require_once __DIR__ . "/../vendor/autoload.php";
//Required package/libraries
use censanext_encoder_decoder\Decrypt;
use censanext_encoder_decoder\Encrypt;
$text = "Aequam memento rebus in arduis servare mentem";
$EncodewordCount = Encrypt::encode($text);
$decodewordCount=Decrypt::decode($EncodewordCount);
echo "Original Text : ".$text."\r\n";
echo "Encode : ".$EncodewordCount."\r\n";
echo "Decode :".$decodewordCount."\r\n";