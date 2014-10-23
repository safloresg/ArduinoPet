<?php

include_once 'TwitterAPIExchange.php';

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$settings = array('oauth_access_token'=>'2827091940-SlEkafqnRdqIXxLTrzfcvXftWkGQoReKELTlTaU',
                  'oauth_access_token_secret' => "kVGmhSGDaB359SC1T2QEBR5sPrmPn8XJj5La00xEp8z7N",
                  'consumer_key' => "JpYMiF6Y0dboO8zU5o7ml07aK",
                  'consumer_secret' => "bfBjl2MKKcJs0MmB7pJcPQQCz9B7zpr8L8foEdMQDIgz1RTRuw"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23TestingArduinoSnowMan&src=typd';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$json =  $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();
$decoded = json_decode($json);

$twitt = $decoded->statuses[0]->text;
echo $twitt;

#echo $json;

?>