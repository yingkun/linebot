<?php
require "vendor/autoload.php";
$access_token = 'kFAq6FmEsEAE/1wRZQGKiVUQ2uOpdFr+dJNU7tueOHlJOh6X9bqm4m0qEokllRWuSN/83eea4IgpYIeeFGViz1kIyBCcBURNtN+P/xQMVG0RmHeNwarOMFCsd2nd0MuCULp71pONMpiO45cSHMJLaAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3c460c21a65b27ac636b4026f6dba0fd';
//$idPush = '1590354365';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มีคนมาบนครับเจ้าพ่อ !');
$response = $bot->pushMessage('Uc326cc692064ddde0282e4d69f30c92c', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
