<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Moz;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class MozClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Moz
 */
class MozClient extends Client
{
	/**
	 * @param array $config
	 * @return MozClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = [])
	{
		$default = [
			'base_url' => 'http://lsapi.seomoz.com',
			'expiresSeconds' => '3600'
		];

		$required = [
			'accessID',
			'secretKey'
		];

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}

		$config = Collection::fromConfig($config, $default, $required);

		$credentials = self::calculateCredentials($config->get('AccessID'),$config->get('secretKey'),$config->get('expiresInterval'));

		$client = new self($config->get('base_url'), $config);

		$client->setDefaultOption('query', [
										   'AccessID' => $config->get('AccessID'),
										   'Expires' => $credentials['expires'],
										   'Signature' => $credentials['signature']
										   ]);
		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionMoz.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		return $client;
	}

	private static function calculateCredentials($accessId,$secretKey,$expiresInterval){

		$expires = time() + $expiresInterval;

		$stringToSign = $accessId."\n".$expires;

		$binarySignature = hash_hmac('sha1', $stringToSign, $secretKey, true);

		$urlSafeSignature = base64_encode($binarySignature);

		$result = array(
			'signature' => $urlSafeSignature,
			'expires' => $expires
		);
		return $result;
	}

}