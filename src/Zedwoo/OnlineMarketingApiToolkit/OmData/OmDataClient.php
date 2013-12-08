<?php
namespace Zedwoo\OnlineMarketingApiToolkit\OmData;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class OmDataClient
 * @package Zedwoo\OnlineMarketingApiToolkit\OmData
 */
class OmDataClient extends Client
{
    /**
     * @param array $config
     * @return OmDataClient
     * @throws \Guzzle\Common\Exception\InvalidArgumentException
     */
    public static function factory($config = [])
    {
        $default = ['base_url' => 'http://api.zedwoo-data.de/'];

        $required = [
            'api_key'
        ];

        foreach ($required as $value) {
            if (empty($config[$value])) {
                throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
            }
        }

        $config = Collection::fromConfig($config, $default, $required);

        $client = new self($config->get('base_url'), $config);

        $client->setDefaultOption('query', [
            'api_key' => $config['api_key']
        ]);

        $client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionOmData.json'));
        $client->setUserAgent('OnlineMarketingApiToolkit');
        return $client;
    }

}