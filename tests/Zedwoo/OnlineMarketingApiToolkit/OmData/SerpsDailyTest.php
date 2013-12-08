<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Client;

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

/**
 * @group OmData
 */

class SerpsDailyTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp(){
        $config = array(
            'api_key' => $_SERVER['API_KEY']
        );
        $this->client = OmDataClient::factory($config);
    }
    public function testAddKeyword(){
        $command = $this->client->getCommand('serps_daily/add_keyword',
            array(
                'keyword' => $_SERVER['SERPS_DAILY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertEquals($_SERVER['SERPS_DAILY_KEYWORD'],$result['keyword']);
    }

    public function testGetKeywords(){

        $command = $this->client->getCommand('serps_daily/get_keywords'
        );
        $result = $command->execute();
        $this->assertGreaterThanOrEqual(1,count($result['keywordItems']));
    }

    public function testGetRankings(){
        $command = $this->client->getCommand('serps_daily/get_rankings',
            array(
                'keyword' => $_SERVER['SERPS_DAILY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertGreaterThanOrEqual(100,count($result['serps']));
    }

    public function testDeleteKeyword(){
        $command = $this->client->getCommand('serps_daily/delete_keyword',
            array(
                'keyword' => $_SERVER['SERPS_DAILY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertEquals($_SERVER['SERPS_DAILY_KEYWORD'],$result['keyword']);
    }
}