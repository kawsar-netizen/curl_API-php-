<?php

// curl_init();
// curl_setopt();
// curl_exec();
// curl_close();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/");
curl_exec($ch);
curl_close($ch);

?>