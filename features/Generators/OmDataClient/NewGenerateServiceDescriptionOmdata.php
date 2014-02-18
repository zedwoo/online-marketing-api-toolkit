<?php

require_once('../../../vendor/autoload.php');

$apiKey = YOUR_API_KEY;
$format = 'json';
$outputFile = '../../../src/Zedwoo/OnlineMarketingApiToolkit/OmData/Resources/ServiceDescriptionOmdata.json';

$client = OmDataClient::factory(array(
									 'api_key' =>$apiKey
								));
$result = json_decode($client->get('resources.json')->send()->getBody(true),1);

$topLevel = new Zedwoo\Generator\ServiceDescriptionTopLevel();
$topLevel->baseUrl = $result['basePath'];

foreach($result['apis'] as $apis){
	$url = str_ireplace('{format}','json', $apis['path']);
	$result = json_decode($client->get($url)->send()->getBody(true),1);
	foreach($result['apis'] as $api){
		$nicknameExploded = explode('-_',$api['operations']['0']['nickname']);
		$operationsName = str_replace(array('v1-','-'),array('','/'),$nicknameExploded['0']);
		$jsonArray['operations'][$operationsName] = generateOperationsItem($api);
		$operation = new \Zedwoo\Generator\ServiceDescriptionOperation();


	}
	break;
}

