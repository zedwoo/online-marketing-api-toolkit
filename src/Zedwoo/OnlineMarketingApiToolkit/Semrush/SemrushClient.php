<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Semrush;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Service\Resource\Model;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class SemrushClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Semrush
 *
 * @method  Model domainRank (array $args = array()) {@command Semrush domainRank}
 * @method  Model domainRankHistory (array $args = array()) {@command Semrush domainRankHistory}
 * @method  Model rankDifference (array $args = array()) {@command Semrush rankDifference}
 * @method  Model rank (array $args = array()) {@command Semrush rank}
 * @method  Model queriesApi (array $args = array()) {@command Semrush queriesApi}
 * @method  Model queriesExport (array $args = array()) {@command Semrush queriesExport}
 * @method  Model domainOrganic (array $args = array()) {@command Semrush domainOrganic}
 * @method  Model domainAdwords (array $args = array()) {@command Semrush domainAdwords}
 * @method  Model domainOrganicOrganic (array $args = array()) {@command Semrush domainOrganicOrganic}
 * @method  Model domainAdwordsAdwords (array $args = array()) {@command Semrush domainAdwordsAdwords}
 * @method  Model domainOrganicAdwords (array $args = array()) {@command Semrush domainOrganicAdwords}
 * @method  Model domainAdwordsOrganic (array $args = array()) {@command Semrush domainAdwordsOrganic}
 * @method  Model domainAdwordsHistorical (array $args = array()) {@command Semrush domainAdwordsHistorical}
 * @method  Model domainDomains (array $args = array()) {@command Semrush domainDomains}
 * @method  Model phrase (array $args = array()) {@command Semrush phrase}
 * @method  Model phraseThis (array $args = array()) {@command Semrush phraseThis}
 * @method  Model phraseOrganic (array $args = array()) {@command Semrush phraseOrganic}
 * @method  Model phraseRelated (array $args = array()) {@command Semrush phraseRelated}
 * @method  Model phraseAdwordsHistorical (array $args = array()) {@command Semrush phraseAdwordsHistorical}
 * @method  Model phraseFullsearch (array $args = array()) {@command Semrush phraseFullsearch}
 * @method  Model urlOrganic (array $args = array()) {@command Semrush urlOrganic}
 * @method  Model urlAdwords (array $args = array()) {@command Semrush urlAdwords}
 * @method  Model publisherTextAds (array $args = array()) {@command Semrush publisherTextAds}
 * @method  Model publisherAdvertisers (array $args = array()) {@command Semrush publisherAdvertisers}
 * @method  Model advertiserPublishers (array $args = array()) {@command Semrush advertiserPublishers}
 * @method  Model advertiserTextAds (array $args = array()) {@command Semrush advertiserTextAds}
 * @method  Model advertiserLandings (array $args = array()) {@command Semrush advertiserLandings}
 * @method  Model advertiserPublisherTextAds (array $args = array()) {@command Semrush advertiserPublisherTextAds}
 * @method  Model advertiserRank (array $args = array()) {@command Semrush advertiserRank}
 * @method  Model publisherRank (array $args = array()) {@command Semrush publisherRank}
 * @method  Model linksDomain (array $args = array()) {@command Semrush linksDomain}
 * @method  Model linksHostname (array $args = array()) {@command Semrush linksHostname}
 * @method  Model links (array $args = array()) {@command Semrush links}
 */
class SemrushClient extends Client
{
	/**
	 * @param array $config
	 * @return SemrushClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = array())
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

		$client->setDefaultOption('query', array(
										   'key' => $config->get('api_key')
										   ));

		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionSemrush.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		return $client;
	}

}