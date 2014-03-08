<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Moz;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Resource\Model;


/**
 * Class MozClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Moz
 *
 * @method  model urlMetrics (array $args = array()) {@command Moz urlMetrics}
 * @method  model urlMetricsBatch (array $args = array()) {@command Moz urlMetricsBatch}
 * @method  model linkMetrics (array $args = array()) {@command Moz linkMetrics}
 * @method  model anchorText (array $args = array()) {@command Moz anchorText}
 * @method  model topPages (array $args = array()) {@command Moz topPages}
 * @method  model metadataLastUpdate () {@command Moz metadataLastUpdate}
 * @method  model metadataNextUpdate () {@command Moz metadataNextUpdate}
 * @method  model metadataIndexStats () {@command Moz metadataIndexStats}
 */
class MozClient extends Client
{
	/**
	 * @param array $config
	 * @return MozClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = array())
	{
		$default = array(
			'base_url' => 'http://lsapi.seomoz.com',
			'expiresSeconds' => '3600'
		);

		$required = array(
			'AccessID',
			'SecretKey'
		);

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}

		$config = Collection::fromConfig($config, $default, $required);

		$credentials = self::calculateCredentials($config->get('AccessID'),$config->get('SecretKey'),$config->get('expiresInterval'));

		$client = new self($config->get('base_url'), $config);

		$client->setDefaultOption('query', array(
										   'AccessID' => $config->get('AccessID'),
										   'Expires' => $credentials['expires'],
										   'Signature' => $credentials['signature']
										   ));
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