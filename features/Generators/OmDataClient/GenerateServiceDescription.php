<?php
require_once('../../../vendor/autoload.php');
use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;
/*
 * Only used to generate the ServerDescription
 * You don't have to do it ;)
 */
$apiKey = YOUR_API_KEY;
$format = 'json';
$outputFile = '../../../src/Zedwoo/OnlineMarketingApiToolkit/OmData/Resources/ServiceDescriptionOmdata.json';

$client = OmDataClient::factory(array(
    'api_key' =>$apiKey
));
$result = json_decode($client->get('resources.json')->send()->getBody(true),1);

$jsonArray['baseUrl'] = $result['basePath'];
$jsonArray['operations'] = array();

foreach($result['apis'] as $apis){
    $url = str_ireplace('{format}','json', $apis['path']);
    $result = json_decode($client->get($url)->send()->getBody(true),1);
    foreach($result['apis'] as $api){
        $nicknameExploded = explode('-_',$api['operations']['0']['nickname']);
        $operationsName = str_replace(array('v1-','-'),array('','/'),$nicknameExploded['0']);
        $jsonArray['operations'][$operationsName] = generateOperationsItem($api);
    }
}
$fp = fopen($outputFile, 'w');
fwrite($fp, json_encode($jsonArray));
fclose($fp);

function generateOperationsItem($api){
    $operation = array();
    $operation['httpMethod'] = $api['operations']['0']['httpMethod'];
    $operation['uri'] = str_replace('{format}','json',$api['path']);
    $operation['summary'] = $api['description'];
    foreach($api['operations']['0']['parameters'] as $parameter){
        $parameterValues = array();
        if($parameter['paramType'] == 'query'){
            $parameterValues['location'] = 'query';
        } elseif($parameter['paramType'] == 'path'){
            $parameterValues['location'] = 'uri';
        }
        $parameterValues['required'] = $parameter['required'];
        $operation['parameters'][$parameter['name']] = $parameterValues;
    }
    return $operation;
}