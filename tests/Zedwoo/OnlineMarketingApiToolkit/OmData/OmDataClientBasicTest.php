<?php

namespace Zedwoo\OnlineMarketingApiToolkit\Omdata\Tests\Client;

use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

/**
 * @group OmData
 */

class OmDataClientTest extends \PHPUnit_Framework_TestCase
{


    public function testFactoryReturnsApikey(){
       $config = array(
            'api_key' => $_SERVER['API_KEY']
        );
        $client = OmDataClient::factory($config);
        $this->assertInstanceOf('Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient',$client);
        $this->assertEquals($config['api_key'],$client->getDefaultOption('query')['api_key']);
    }

    /**
     * @expectedException \Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testFactoryReturnsExceptionOnNullArguments()
    {
        $config = array();

        $client = OmDataClient::factory($config);
    }

    /**
     * @expectedException \Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testFactoryReturnsExceptionOnBlankArguments()
    {
        $config = array(
            'api_key' => ''
        );

        $client = OmDataClient::factory($config);
    }
}