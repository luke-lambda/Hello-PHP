<?php

require 'requestURL.php';


if (!isset($_POST['username']) || $_POST['username'] == '') {
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1>Erro. Nenhum nome foi digitado!!! 😕</h1>";
    exit;
} else {
    $cc = getURL("http://ip-api.com/json/?fields=countryCode", 'countryCode');  // Pega o cc de acordo com ip da maquina
    $hello = getURL("https://fourtonfish.com/hellosalut/?cc={$cc}", 'hello');

    echo "<h1>" . html_entity_decode($hello) . " {$_POST['username']} 😃</h1>";
}
