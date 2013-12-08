<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Client;

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

/**
 * @group OmData
 */

class AccountTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp(){
        $config = array(
            'api_key' => $_SERVER['API_KEY']
        );
        $this->client = OmDataClient::factory($config);
    }

    public function testGetStatus(){
        $command = $this->client->getCommand('account/status'
        );
        $result = $command->execute();
        $this->assertArrayHasKey('AllowedFunctions',$result);
        $this->assertGreaterThanOrEqual(1,count($result['AllowedFunctions']));
    }
}