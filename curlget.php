<?php


$url = "https://reqres.in/api/users?page=2";

// $url = "https://www.itbadmission.com/mobile/display.php";
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


$resp = curl_exec($ch);

if($e = curl_error($ch)){

    echo $e;
}else{
    $decoded = json_decode($resp,true);
 echo '<pre>';
    print_r($decoded);
}
curl_close($ch);
?>