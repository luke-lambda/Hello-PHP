<?php

require 'requestURL.php';



if (!isset($_POST['mail'])) {
    header('HTTP/1.0 401 Unauthorized');
    exit;
} else {
    $cc = getURL("http://ip-api.com/json/?fields=countryCode", 'countryCode');  // Pega o cc de acordo com ip da maquina
    $hello = getURL("https://fourtonfish.com/hellosalut/?cc={$cc}", 'hello');

    echo html_entity_decode($hello);
}
