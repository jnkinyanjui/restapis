<?php

$ch = curl_init();

$url = "https://rawg.io/api/games?key=5a8405acbb4043aca07f4070f42737ad&page=1&page_size=5";

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$resp = curl_exec($ch);

if($e = curl_exec($ch)){
    echo $e;
}else{
    $decoded = json_decode($resp, true);
    print_r($decoded);
}
curl_close($ch);
?>