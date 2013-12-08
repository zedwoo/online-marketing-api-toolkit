<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Client;

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

/**
 * @group OmData
 */

class SerpsWeeklyTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp(){
        $config = array(
            'api_key' => $_SERVER['API_KEY']
        );
        $this->client = OmDataClient::factory($config);
    }

   public function testGetKeywords(){

       $command = $this->client->getCommand('serps_weekly/get_keywords'
       );
       $result = $command->execute();
       $this->assertGreaterThanOrEqual(1,count($result['keywordItems']));
   }
    public function testAddKeyword(){
        $command = $this->client->getCommand('serps_weekly/add_keyword',
            array(
                'keyword' => $_SERVER['SERPS_WEEKLY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertEquals($_SERVER['SERPS_WEEKLY_KEYWORD'],$result['keyword']);
    }

    public function testGetRankings(){
        $command = $this->client->getCommand('serps_weekly/get_rankings',
            array(
                'keyword' => $_SERVER['SERPS_WEEKLY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertGreaterThanOrEqual(100,count($result['serps']));
    }

    public function testDeleteKeyword(){
        $command = $this->client->getCommand('serps_weekly/delete_keyword',
            array(
                'keyword' => $_SERVER['SERPS_WEEKLY_KEYWORD']
            )
        );
        $result = $command->execute();
        $this->assertEquals($_SERVER['SERPS_WEEKLY_KEYWORD'],$result['keyword']);
    }
}