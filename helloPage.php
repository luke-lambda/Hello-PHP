<?php

require 'requestURL.php';


$cc = getURL("http://ip-api.com/json/?fields=countryCode", 'countryCode');  // Pega o cc de acordo com ip da maquina
$x = getURL("https://fourtonfish.com/hellosalut/?cc={$cc}", 'hello');

echo html_entity_decode($x);