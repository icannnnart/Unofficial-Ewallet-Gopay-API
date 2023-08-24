<?php
$otp = "0000" //otp dari sms kamu
$tokenotp = "xxxxxxx-95eb-4156-ae89-xxxxxxx" //token otp dari getOTP.php
  
$url = "https://apinyaihsan.cloud/api/gopay/VerifOTP.php?otp=$otp&token_otp=$tokenotp";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

