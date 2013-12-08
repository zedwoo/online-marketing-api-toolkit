<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Client;

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

/**
 * @group OmData
 */

class SerpsDirectTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp(){
        $config = array(
            'api_key' => $_SERVER['API_KEY']
        );
        $this->client = OmDataClient::factory($config);
    }


    public function testGetRankings(){
        $command = $this->client->getCommand('serps_direct/get_rankings',
            array(
                'keyword' => $_SERVER['SERPS_DIRECT_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertGreaterThanOrEqual(90,count($result['serps']));
    }

}