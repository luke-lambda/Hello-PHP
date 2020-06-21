<?php

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
