<?php
require_once('configForExamples.php');
require_once('../vendor/autoload.php');

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

$client = OmDataClient::factory(array(
    'api_key' => 'nonsense'
));
try {
$command = $client->getCommand('account/status');

$result = $command->execute();
    var_dump($result);
} catch (Guzzle\Http\Exception\BadResponseException $e) {
    echo 'Uh oh! ' . $e->getMessage();
}

