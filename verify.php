<?php
$access_token = 'CA+wvZz2KlWk2KH0Bspmue+cDiPkCPn2Vkob/rRyoxm8MNsK0GupFEGaf7nnlUIjZJQQagD+rVmuIqjRuJDRlTIeRPa18X8eHdzyLEpDExDpHrgCEoO7CKVAqGitZ2Z33Ws21p27b6GjWX5aGiwf4QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

echo $result;