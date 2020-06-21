<?php

$curl = curl_init();
$ipUrl = "http://ip-api.com/json/?fields=countryCode";

curl_setopt($curl, CURLOPT_URL, $ipUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
curl_close($curl);

$countryCode = json_decode($resp)->{'countryCode'};
