<?php

$curl = curl_init('https://api.nasa.gov/planetary/apod?api_key=CmDSrR4F6clkmCNKs3dErGNg4XMpSQF7P2xPezUG');
curl_setopt_array($curl, [
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10
]);
$data = curl_exec($curl);
if($data === false){
    var_dump(curl_error($curl));
} else {
    if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200){
    $data = json_decode($data, true);
    }
}
curl_close($curl);