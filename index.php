<?php

$cc = getURL("http://ip-api.com/json/?fields=countryCode", 'countryCode');
$x = getURL("https://fourtonfish.com/hellosalut/?cc={$cc}", 'hello');
print PHP_EOL . html_entity_decode($x) . PHP_EOL;

function getURL($url, $strField)
{
    $curl = curl_init();
    
    // cURL GET
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($curl);
    curl_close($curl);

    return json_decode($resp)->{$strField};
};
