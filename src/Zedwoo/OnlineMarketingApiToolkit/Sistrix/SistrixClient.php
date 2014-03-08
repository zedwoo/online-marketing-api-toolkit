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
 * @method  model domain (array $args = array()) {@command Sistrix domain}
 * @method  model domainOverview (array $args = array()) {@command Sistrix domainOverview}
 * @method  model domainSichtbarkeitsindex (array $args = array()) {@command Sistrix domainSichtbarkeitsindex}
 * @method  model domainPages (array $args = array()) {@command Sistrix domainPages}
 * @method  model domainPagerank (array $args = array()) {@command Sistrix domainPagerank}
 * @method  model domainAge (array $args = array()) {@command Sistrix domainAge}
 * @method  model domainCompetitorsSeo (array $args = array()) {@command Sistrix domainCompetitorsSeo}
 * @method  model domainCompetitorsSem (array $args = array()) {@command Sistrix domainCompetitorsSem}
 * @method  model domainCompetitorsUs (array $args = array()) {@command Sistrix domainCompetitorsUs}
 * @method  model domainKwcountSeo (array $args = array()) {@command Sistrix domainKwcountSeo}
 * @method  model domainKwcountSeoTop10 (array $args = array()) {@command Sistrix domainKwcountSeoTop10}
 * @method  model domainKwcountSem (array $args = array()) {@command Sistrix domainKwcountSem}
 * @method  model domainKwcountUs (array $args = array()) {@command Sistrix domainKwcountUs}
 * @method  model domainSocialOverview (array $args = array()) {@command Sistrix domainSocialOverview}
 * @method  model domainSocialTop (array $args = array()) {@command Sistrix domainSocialTop}
 * @method  model domainSocialLatest (array $args = array()) {@command Sistrix domainSocialLatest}
 * @method  model domainSocialUrl (array $args = array()) {@command Sistrix domainSocialUrl}
 * @method  model keyword (array $args = array()) {@command Sistrix keyword}
 * @method  model keywordSeo (array $args = array()) {@command Sistrix keywordSeo}
 * @method  model keywordSem (array $args = array()) {@command Sistrix keywordSem}
 * @method  model keywordUs (array $args = array()) {@command Sistrix keywordUs}
 * @method  model keywordDomainSeo (array $args = array()) {@command Sistrix keywordDomainSeo}
 * @method  model keywordDomainSem (array $args = array()) {@command Sistrix keywordDomainSem}
 * @method  model keywordDomainUs (array $args = array()) {@command Sistrix keywordDomainUs}
 * @method  model linksOverview (array $args = array()) {@command Sistrix linksOverview}
 * @method  model linksList (array $args = array()) {@command Sistrix linksList}
 * @method  model linksLinktargets (array $args = array()) {@command Sistrix linksLinktargets}
 * @method  model linksLinktexts (array $args = array()) {@command Sistrix linksLinktexts}
 * @method  model monitoringProjects () {@command Sistrix monitoringProjects}
 * @method  model monitoringFolders (array $args = array()) {@command Sistrix monitoringFolders}
 * @method  model monitoringFolder (array $args = array()) {@command Sistrix monitoringFolder}
 * @method  model monitoringCheck (array $args = array()) {@command Sistrix monitoringCheck}
 * @method  model monitoringReports (array $args = array()) {@command Sistrix monitoringReports}
 * @method  model monitoringReport (array $args = array()) {@command Sistrix monitoringReport}
 * @method  model monitoringReportDownload (array $args = array()) {@command Sistrix monitoringReportDownload}
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