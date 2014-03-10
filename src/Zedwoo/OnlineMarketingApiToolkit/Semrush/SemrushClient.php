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
 * @method  model domainRank (array $args = array()) {@command Semrush domainRank}
 * @method  model domainRankHistory (array $args = array()) {@command Semrush domainRankHistory}
 * @method  model rankDifference (array $args = array()) {@command Semrush rankDifference}
 * @method  model rank (array $args = array()) {@command Semrush rank}
 * @method  model queriesApi (array $args = array()) {@command Semrush queriesApi}
 * @method  model queriesExport (array $args = array()) {@command Semrush queriesExport}
 * @method  model domainOrganic (array $args = array()) {@command Semrush domainOrganic}
 * @method  model domainAdwords (array $args = array()) {@command Semrush domainAdwords}
 * @method  model domainOrganicOrganic (array $args = array()) {@command Semrush domainOrganicOrganic}
 * @method  model domainAdwordsAdwords (array $args = array()) {@command Semrush domainAdwordsAdwords}
 * @method  model domainOrganicAdwords (array $args = array()) {@command Semrush domainOrganicAdwords}
 * @method  model domainAdwordsOrganic (array $args = array()) {@command Semrush domainAdwordsOrganic}
 * @method  model domainAdwordsHistorical (array $args = array()) {@command Semrush domainAdwordsHistorical}
 * @method  model domainDomains (array $args = array()) {@command Semrush domainDomains}
 * @method  model phrase (array $args = array()) {@command Semrush phrase}
 * @method  model phraseThis (array $args = array()) {@command Semrush phraseThis}
 * @method  model phraseOrganic (array $args = array()) {@command Semrush phraseOrganic}
 * @method  model phraseRelated (array $args = array()) {@command Semrush phraseRelated}
 * @method  model phraseAdwordsHistorical (array $args = array()) {@command Semrush phraseAdwordsHistorical}
 * @method  model phraseFullsearch (array $args = array()) {@command Semrush phraseFullsearch}
 * @method  model urlOrganic (array $args = array()) {@command Semrush urlOrganic}
 * @method  model urlAdwords (array $args = array()) {@command Semrush urlAdwords}
 * @method  model publisherTextAds (array $args = array()) {@command Semrush publisherTextAds}
 * @method  model publisherAdvertisers (array $args = array()) {@command Semrush publisherAdvertisers}
 * @method  model advertiserPublishers (array $args = array()) {@command Semrush advertiserPublishers}
 * @method  model advertiserTextAds (array $args = array()) {@command Semrush advertiserTextAds}
 * @method  model advertiserLandings (array $args = array()) {@command Semrush advertiserLandings}
 * @method  model advertiserPublisherTextAds (array $args = array()) {@command Semrush advertiserPublisherTextAds}
 * @method  model advertiserRank (array $args = array()) {@command Semrush advertiserRank}
 * @method  model publisherRank (array $args = array()) {@command Semrush publisherRank}
 * @method  model linksDomain (array $args = array()) {@command Semrush linksDomain}
 * @method  model linksHostname (array $args = array()) {@command Semrush linksHostname}
 * @method  model links (array $args = array()) {@command Semrush links}
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