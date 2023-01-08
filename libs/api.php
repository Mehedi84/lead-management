<?php
///////////////////////////function for sms send//////////////////////////////////
function convertBanglatoUnicode($BanglaText)
{
	$unicodeBanglaTextForSms = strtoupper(bin2hex(iconv('UTF-8', 'UCS-2BE', $BanglaText)));
	return $unicodeBanglaTextForSms;
}


function sendSMS($mobiles, $message){
  $phone = '88'.$mobiles;
  $sender_id = '10MinAffiliateapibng';
  $user ='10minaffiliateapi';
  $cmsid ='123456789';
  $pass ='n29>1G65';

	$message = convertBanglatoUnicode($message);
  $url = "http://sms.sslwireless.com/pushapi/dynamic/server.php?user=10minicontapi&pass=37@9B88l&sid=10MinSchoolicontbng&sms=$message&msisdn=$phone&csmsid=123456789";
	$c = curl_init(); 
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($c, CURLOPT_URL, $url); 
	$response = curl_exec($c); 
	print_r($response);

}

// sendSMS("01675342612", "Test SMS");
sendSMS("01639199218", "Test SMS");

