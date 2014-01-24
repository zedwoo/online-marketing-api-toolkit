<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Response;

use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Mock\MockPlugin;
use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;


class ResponseTest extends \Guzzle\Tests\GuzzleTestCase {

	public function testReponse(){
		// example for mock Responses
		$client = OmDataClient::factory(array(
											 'api_key' => '****'
										));
		$plugin = new MockPlugin();
		$plugin->addResponse(new Response(200,null,'This is the body content'));
		$client->addSubscriber($plugin);
		$command = $client->getCommand('serps_weekly/get_rankings',array(
																		'keyword' => 'hausbau',
																		'date' => '2013-11-24'
																   ));
		$result = $command->execute();
		//var_dump($result->getBody(true));

	}


}