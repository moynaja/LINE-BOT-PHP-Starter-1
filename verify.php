<?php
$access_token = 'YqEj8NhXG85NyYjW3oI2r9wRq7he+0kdw9c8k+uZPdlfJsAvfu4iqAgw0/Cs+Iw7G1D4Ej6fEWa7J3XnUpnvXA0AwuUmtjS+sZMjL1WHd89155euwujpAoDQW+iQoTvMxL3ile6NfPz5M8enlWzPgQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>