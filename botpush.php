<?php
require "vendor/autoload.php";
$access_token = 'kFAq6FmEsEAE/1wRZQGKiVUQ2uOpdFr+dJNU7tueOHlJOh6X9bqm4m0qEokllRWuSN/83eea4IgpYIeeFGViz1kIyBCcBURNtN+P/xQMVG0RmHeNwarOMFCsd2nd0MuCULp71pONMpiO45cSHMJLaAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3c460c21a65b27ac636b4026f6dba0fd';
$idPush = 'Uc326cc692064ddde0282e4d69f30c92c';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello from NodeMCU');
$response = $bot->pushMessage('U7ef7a449f2a5c2057eacfc02ba2eb286', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
