<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Sistrix;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Service\Resource\Model;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class SistrixClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Sistrix
 *
 * @method  Model domain (array $args = array()) {@command Sistrix domain}
 * @method  Model domainOverview (array $args = array()) {@command Sistrix domainOverview}
 * @method  Model domainSichtbarkeitsindex (array $args = array()) {@command Sistrix domainSichtbarkeitsindex}
 * @method  Model domainPages (array $args = array()) {@command Sistrix domainPages}
 * @method  Model domainPagerank (array $args = array()) {@command Sistrix domainPagerank}
 * @method  Model domainAge (array $args = array()) {@command Sistrix domainAge}
 * @method  Model domainCompetitorsSeo (array $args = array()) {@command Sistrix domainCompetitorsSeo}
 * @method  Model domainCompetitorsSem (array $args = array()) {@command Sistrix domainCompetitorsSem}
 * @method  Model domainCompetitorsUs (array $args = array()) {@command Sistrix domainCompetitorsUs}
 * @method  Model domainKwcountSeo (array $args = array()) {@command Sistrix domainKwcountSeo}
 * @method  Model domainKwcountSeoTop10 (array $args = array()) {@command Sistrix domainKwcountSeoTop10}
 * @method  Model domainKwcountSem (array $args = array()) {@command Sistrix domainKwcountSem}
 * @method  Model domainKwcountUs (array $args = array()) {@command Sistrix domainKwcountUs}
 * @method  Model domainSocialOverview (array $args = array()) {@command Sistrix domainSocialOverview}
 * @method  Model domainSocialTop (array $args = array()) {@command Sistrix domainSocialTop}
 * @method  Model domainSocialLatest (array $args = array()) {@command Sistrix domainSocialLatest}
 * @method  Model domainSocialUrl (array $args = array()) {@command Sistrix domainSocialUrl}
 * @method  Model keyword (array $args = array()) {@command Sistrix keyword}
 * @method  Model keywordSeo (array $args = array()) {@command Sistrix keywordSeo}
 * @method  Model keywordSem (array $args = array()) {@command Sistrix keywordSem}
 * @method  Model keywordUs (array $args = array()) {@command Sistrix keywordUs}
 * @method  Model keywordDomainSeo (array $args = array()) {@command Sistrix keywordDomainSeo}
 * @method  Model keywordDomainSem (array $args = array()) {@command Sistrix keywordDomainSem}
 * @method  Model keywordDomainUs (array $args = array()) {@command Sistrix keywordDomainUs}
 * @method  Model linksOverview (array $args = array()) {@command Sistrix linksOverview}
 * @method  Model linksList (array $args = array()) {@command Sistrix linksList}
 * @method  Model linksLinktargets (array $args = array()) {@command Sistrix linksLinktargets}
 * @method  Model linksLinktexts (array $args = array()) {@command Sistrix linksLinktexts}
 * @method  Model monitoringProjects () {@command Sistrix monitoringProjects}
 * @method  Model monitoringFolders (array $args = array()) {@command Sistrix monitoringFolders}
 * @method  Model monitoringFolder (array $args = array()) {@command Sistrix monitoringFolder}
 * @method  Model monitoringCheck (array $args = array()) {@command Sistrix monitoringCheck}
 * @method  Model monitoringReports (array $args = array()) {@command Sistrix monitoringReports}
 * @method  Model monitoringReport (array $args = array()) {@command Sistrix monitoringReport}
 * @method  Model monitoringReportDownload (array $args = array()) {@command Sistrix monitoringReportDownload}
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