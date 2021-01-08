<?php


$access_token = 'CA+wvZz2KlWk2KH0Bspmue+cDiPkCPn2Vkob/rRyoxm8MNsK0GupFEGaf7nnlUIjZJQQagD+rVmuIqjRuJDRlTIeRPa18X8eHdzyLEpDExDpHrgCEoO7CKVAqGitZ2Z33Ws21p27b6GjWX5aGiwf4QdB04t89/1O/w1cDnyilFU=';

$userId = 'U55ebca7c282122cff90fec9bb3062f5a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

