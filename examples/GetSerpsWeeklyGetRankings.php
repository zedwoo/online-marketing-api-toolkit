<?php
require_once('configForExamples.php');
require_once('../vendor/autoload.php');

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

$client = OmDataClient::factory(array(
    'api_key' => ZEDWOO_API_KEY
));
$command = $client->getCommand('serps_weekly/get_rankings',array(
    'keyword' => 'hausbau',
    'date' => '2013-11-24'
));

$result = $command->execute();
var_dump($result);