<?php
namespace Zedwoo\OnlineMarketingApiToolkit\SeoKicks;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Resource\Model;
use Zedwoo\OnlineMarketingApiToolkit\Seokicks\ForceContenttypePlugin;


/**
 * Class SeokicksClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Seokicks
 *
 * @method  Model getInlinkData (array $args = array()) {@command SeokicksClient getInlinkData}
 *
 */
class SeokicksClient extends Client
{
	/**
	 * @param array $config
	 * @return SeokicksClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = array())
	{
		$default = array(
				"base_url" => "http://www.seokicks.de/SEOkicksService/V1/"
		);

		$required = array(
				'appid'
		);

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}

		$config = Collection::fromConfig($config, $default, $required);



		$client = new self($config->get('base_url'), $config);
		$client->setDefaultOption('query', array(
				'appid' => $config['appid']
		));
		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionSeokicks.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		/*
		 * Seokicks send javascript and not json as response
		 */
		$plugin = new ForceContenttypePlugin();
		$client->addSubscriber($plugin);

		return $client;
	}
}