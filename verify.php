<?php
$access_token = 'mFYt9X+aI3AA65GOZ3r+Rc7/CYEmapoKfAp3+AUnrom5THHfd3ouP6K1v6RgxLioZJQQagD+rVmuIqjRuJDRlTIeRPa18X8eHdzyLEpDExAAgqbY1m3yV2RE1YGgcrzC3Dt2/GkdWHKLo4PD65f0SgdB04t89/1O/w1cDnyilFU=';


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