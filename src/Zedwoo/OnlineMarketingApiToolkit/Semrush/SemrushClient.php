<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Semrush;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class SemrushClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Semrush
 */
class SemrushClient extends Client
{
	/**
	 * @param array $config
	 * @return SemrushClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = [])
	{
		$default = array();
		$required = [
			'api_key'
		];

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}
		$config = Collection::fromConfig($config, $default, $required);


		$client = new self('', $config);

		$client->setDefaultOption('query', [
										   'key' => $config->get('api_key')
										   ]);

		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionSemrush.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		return $client;
	}

}