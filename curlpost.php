<?php

$url = "https://rawg.io/api/games?key=5a8405acbb4043aca07f4070f42737ad&page=1&page_size=5";

$data_array = array(
'name' => 'John Doe',
'job' => 'Web Developer'
);

$data = http_build_query($data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}else{
    $decoded = json_decode($resp);
    foreach($decoded as $key => $val){
        echo $key . ':' . $val .'<br>';
    }

}
curl_close($ch);
?>
