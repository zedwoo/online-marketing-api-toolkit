<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Sistrix;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class SistrixClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Sistrix
 */
class SistrixClient extends Client
{
	/**
	 * @param array $config
	 * @return SistrixClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = array())
	{
		$default = array(
			'base_url' => 'http://api.sistrix.net/',
			'format' => 'json'
		);

		$required = array(
			'api_key'
		);

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}

		$config = Collection::fromConfig($config, $default, $required);

		$client = new self($config->get('base_url'), $config);

		$client->setDefaultOption('query', array(
										   'api_key' => $config->get('api_key'),
										   'format' => $config->get('format')
										   ));

		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionSistrix.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		return $client;
	}

}