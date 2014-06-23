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
 * @method  SistrixClient domain (array $args = array()) {@command Sistrix domain}
 * @method  SistrixClient domainOverview (array $args = array()) {@command Sistrix domainOverview}
 * @method  SistrixClient domainSichtbarkeitsindex (array $args = array()) {@command Sistrix domainSichtbarkeitsindex}
 * @method  SistrixClient domainPages (array $args = array()) {@command Sistrix domainPages}
 * @method  SistrixClient domainPagerank (array $args = array()) {@command Sistrix domainPagerank}
 * @method  SistrixClient domainAge (array $args = array()) {@command Sistrix domainAge}
 * @method  SistrixClient domainCompetitorsSeo (array $args = array()) {@command Sistrix domainCompetitorsSeo}
 * @method  SistrixClient domainCompetitorsSem (array $args = array()) {@command Sistrix domainCompetitorsSem}
 * @method  SistrixClient domainCompetitorsUs (array $args = array()) {@command Sistrix domainCompetitorsUs}
 * @method  SistrixClient domainKwcountSeo (array $args = array()) {@command Sistrix domainKwcountSeo}
 * @method  SistrixClient domainKwcountSeoTop10 (array $args = array()) {@command Sistrix domainKwcountSeoTop10}
 * @method  SistrixClient domainKwcountSem (array $args = array()) {@command Sistrix domainKwcountSem}
 * @method  SistrixClient domainKwcountUs (array $args = array()) {@command Sistrix domainKwcountUs}
 * @method  SistrixClient domainSocialOverview (array $args = array()) {@command Sistrix domainSocialOverview}
 * @method  SistrixClient domainSocialTop (array $args = array()) {@command Sistrix domainSocialTop}
 * @method  SistrixClient domainSocialLatest (array $args = array()) {@command Sistrix domainSocialLatest}
 * @method  SistrixClient domainSocialUrl (array $args = array()) {@command Sistrix domainSocialUrl}
 * @method  SistrixClient keyword (array $args = array()) {@command Sistrix keyword}
 * @method  SistrixClient keywordSeo (array $args = array()) {@command Sistrix keywordSeo}
 * @method  SistrixClient keywordSem (array $args = array()) {@command Sistrix keywordSem}
 * @method  SistrixClient keywordUs (array $args = array()) {@command Sistrix keywordUs}
 * @method  SistrixClient keywordDomainSeo (array $args = array()) {@command Sistrix keywordDomainSeo}
 * @method  SistrixClient keywordDomainSem (array $args = array()) {@command Sistrix keywordDomainSem}
 * @method  SistrixClient keywordDomainUs (array $args = array()) {@command Sistrix keywordDomainUs}
 * @method  SistrixClient linksOverview (array $args = array()) {@command Sistrix linksOverview}
 * @method  SistrixClient linksList (array $args = array()) {@command Sistrix linksList}
 * @method  SistrixClient linksLinktargets (array $args = array()) {@command Sistrix linksLinktargets}
 * @method  SistrixClient linksLinktexts (array $args = array()) {@command Sistrix linksLinktexts}
 * @method  SistrixClient monitoringProjects () {@command Sistrix monitoringProjects}
 * @method  SistrixClient monitoringFolders (array $args = array()) {@command Sistrix monitoringFolders}
 * @method  SistrixClient monitoringFolder (array $args = array()) {@command Sistrix monitoringFolder}
 * @method  SistrixClient monitoringCheck (array $args = array()) {@command Sistrix monitoringCheck}
 * @method  SistrixClient monitoringReports (array $args = array()) {@command Sistrix monitoringReports}
 * @method  SistrixClient monitoringReport (array $args = array()) {@command Sistrix monitoringReport}
 * @method  SistrixClient monitoringReportDownload (array $args = array()) {@command Sistrix monitoringReportDownload}
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