<?php
require_once('configForExamples.php');
require_once('../vendor/autoload.php');

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

$client = OmDataClient::factory(array(
    'api_key' => ZEDWOO_API_KEY
));

$command = $client->getCommand('account/status');

$result = $command->execute();

var_dump($result);