<?php

$instagram_business_id = '17841432841906929'; 
$access_token = 'EAAC7baskAHMBAIt4RKVZAu2KeD7LPUADpv2s9ZCUXUco996prklIeKJv1kFn31bNB9AiDdKYZA3KR1FcsTmfwZA0Abz6c4ohh5QpVgZBWetp3iNjiyQDNHY5v2F44X6LuFVzrdzZCcKbstcmM51l5ZBsHqL2D5gLEZAE27eoFLcZC2gZDZD';

$query = 'name,media{caption,like_count,media_url,permalink,timestamp,username}&access_token='.$access_token;

$instagram_api_url = 'https://graph.facebook.com/v7.0/';
$target_url = $instagram_api_url.$instagram_business_id."?fields=".$query."&access_token=".$access_token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$instagram_data = curl_exec($ch);
curl_close($ch);

echo $instagram_data;
exit;

?>