<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Strucr;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Service\Resource\Model;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class StrucrClient
 * @package Zedwoo\OnlineMarketingApiToolkit\Strucr
 *
 * @method StrucrClient getCrawlsOfDomainById(array $args = array()) {@command  Strucr getCrawlsOfDomainById}
 * @method StrucrClient getDomainById(array $args = array()) {@command  Strucr getDomainById}
 * @method StrucrClient getDomains() {@command  Strucr getDomains}
 * @method StrucrClient getAllCrawls() {@command  Strucr getAllCrawls}
 * @method StrucrClient getCrawlRobotsTxtById(array $args = array()) {@command  Strucr getCrawlRobotsTxtById}
 * @method StrucrClient getCrawlById(array $args = array()) {@command  Strucr getCrawlById}
 * @method StrucrClient getCrawlByIdHostsByOutgoingLinks(array $args = array()) {@command  Strucr getCrawlByIdHostsByOutgoingLinks}
 * @method StrucrClient getCrawlByIdHostsByPages(array $args = array()) {@command  Strucr getCrawlByIdHostsByPages}
 * @method StrucrClient getCrawlByIdHostsById(array $args = array()) {@command  Strucr getCrawlByIdHostsById}
 * @method StrucrClient getCrawlByIdHostsByIncomingLinks(array $args = array()) {@command  Strucr getCrawlByIdHostsByIncomingLinks}
 * @method StrucrClient getCrawlByIdPagesByIdOutgoingLinks(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdOutgoingLinks}
 * @method StrucrClient getCrawlByIdPagesByIdIncomingLinks(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdIncomingLinks}
 * @method StrucrClient getCrawlByIdPages(array $args = array()) {@command  Strucr getCrawlByIdPages}
 * @method StrucrClient getCrawlByIdPagesById(array $args = array()) {@command  Strucr getCrawlByIdPagesById}
 * @method StrucrClient getCrawlByIdPagesByIdReport(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdReport}
 * @method StrucrClient getCrawlByIdPagesFind(array $args = array()) {@command  Strucr getCrawlByIdPagesFind}
 * @method StrucrClient getCrawlByIdPagesByIdCrawl(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdCrawl}
 * @method StrucrClient getCrawlByIdReportHints(array $args = array()) {@command  Strucr getCrawlByIdReportHints}
 * @method StrucrClient getCrawlByIdReportHintsForValue(array $args = array()) {@command  Strucr getCrawlByIdReportHintsForValue}
 * @method StrucrClient getCrawlByIdReportResponsetimesForValue(array $args = array()) {@command  Strucr getCrawlByIdReportResponsetimesForValue}
 * @method StrucrClient getCrawlByIdReportLinksIncoming(array $args = array()) {@command  Strucr getCrawlByIdReportLinksIncoming}
 * @method StrucrClient getCrawlByIdReportErrors(array $args = array()) {@command  Strucr getCrawlByIdReportErrors}
 * @method StrucrClient getCrawlByIdReportLevelCrawled(array $args = array()) {@command  Strucr getCrawlByIdReportLevelCrawled}
 * @method StrucrClient getCrawlByIdReportLinksIncomingExternal(array $args = array()) {@command  Strucr getCrawlByIdReportLinksIncomingExternal}
 * @method StrucrClient getCrawlByIdReportLevelDiscovered(array $args = array()) {@command  Strucr getCrawlByIdReportLevelDiscovered}
 * @method StrucrClient getCrawlByIdReport(array $args = array()) {@command  Strucr getCrawlByIdReport}
 * @method StrucrClient getCrawlByIdReportStatusForValue(array $args = array()) {@command  Strucr getCrawlByIdReportStatusForValue}
 * @method StrucrClient getCrawlByIdReport2DRank(array $args = array()) {@command  Strucr getCrawlByIdReport2DRank}
 * @method StrucrClient getCrawlByIdReportLevelDiscoveredForValue(array $args = array()) {@command  Strucr getCrawlByIdReportLevelDiscoveredForValue}
 * @method StrucrClient getCrawlByIdReportLinksOutgoing(array $args = array()) {@command  Strucr getCrawlByIdReportLinksOutgoing}
 * @method StrucrClient getCrawlByIdReportPagerank(array $args = array()) {@command  Strucr getCrawlByIdReportPagerank}
 * @method StrucrClient getCrawlByIdReportCheirank(array $args = array()) {@command  Strucr getCrawlByIdReportCheirank}
 * @method StrucrClient getCrawlByIdReportDuplicateContentSourceByID(array $args = array()) {@command  Strucr getCrawlByIdReportDuplicateContentSourceByID}
 * @method StrucrClient getCrawlByIdReportSizesCompressedForValue(array $args = array()) {@command  Strucr getCrawlByIdReportSizesCompressedForValue}
 * @method StrucrClient getCrawlByIdReportDuplicateContentById(array $args = array()) {@command  Strucr getCrawlByIdReportDuplicateContentById}
 * @method StrucrClient getCrawlByIdReportSizesUncompressedForValue(array $args = array()) {@command  Strucr getCrawlByIdReportSizesUncompressedForValue}
 * @method StrucrClient getCrawlByIdReportHttpStatusForValue(array $args = array()) {@command  Strucr getCrawlByIdReportHttpStatusForValue}
 * @method StrucrClient getCancelFlags() {@command  Strucr getCancelFlags}
 * @method StrucrClient getRobotTxtFlags() {@command  Strucr getRobotTxtFlags}
 * @method StrucrClient getResponseTimesById(array $args = array()) {@command  Strucr getResponseTimesById}
 * @method StrucrClient getSizesCompressedById(array $args = array()) {@command  Strucr getSizesCompressedById}
 * @method StrucrClient getResponseTimes() {@command  Strucr getResponseTimes}
 * @method StrucrClient getErrors() {@command  Strucr getErrors}
 * @method StrucrClient getRobotTxtFlagsById(array $args = array()) {@command  Strucr getRobotTxtFlagsById}
 * @method StrucrClient getStatusPages() {@command  Strucr getStatusPages}
 * @method StrucrClient getSections() {@command  Strucr getSections}
 * @method StrucrClient getStatusCrawlsById(array $args = array()) {@command  Strucr getStatusCrawlsById}
 * @method StrucrClient getSizesUncompressedById(array $args = array()) {@command  Strucr getSizesUncompressedById}
 * @method StrucrClient getStatusPagesById(array $args = array()) {@command  Strucr getStatusPagesById}
 * @method StrucrClient getLinkTypesById(array $args = array()) {@command  Strucr getLinkTypesById}
 * @method StrucrClient getCancelFlagsById(array $args = array()) {@command  Strucr getCancelFlagsById}
 * @method StrucrClient getSectionsById(array $args = array()) {@command  Strucr getSectionsById}
 * @method StrucrClient getLinkTypes() {@command  Strucr getLinkTypes}
 * @method StrucrClient getHostLocations() {@command  Strucr getHostLocations}
 * @method StrucrClient getSizesCompressed() {@command  Strucr getSizesCompressed}
 * @method StrucrClient getErrorsById(array $args = array()) {@command  Strucr getErrorsById}
 * @method StrucrClient getLinkReachesById(array $args = array()) {@command  Strucr getLinkReachesById}
 * @method StrucrClient getHostLocationsById(array $args = array()) {@command  Strucr getHostLocationsById}
 * @method StrucrClient getStatusCrawls() {@command  Strucr getStatusCrawls}
 * @method StrucrClient getLinkReaches() {@command  Strucr getLinkReaches}
 * @method StrucrClient getHints() {@command  Strucr getHints}
 * @method StrucrClient getHintById(array $args = array()) {@command  Strucr getHintById}
 * @method StrucrClient getSizesUncompressed() {@command  Strucr getSizesUncompressed}
 */
class StrucrClient extends Client
{
	/**
	 * @param array $config
	 * @return StrucrClient
	 * @throws \Guzzle\Common\Exception\InvalidArgumentException
	 */
	public static function factory($config = array())
	{
		$default = array(
				'base_url' => 'https://api.strucr.com/1.0/'
		);

		$required = array(
				'user',
				'password'
		);

		foreach ($required as $value) {
			if (empty($config[$value])) {
				throw new InvalidArgumentException("Argument '{$value}' must not be blank.");
			}
		}

		$config = Collection::fromConfig($config, $default, $required);

		$client = new self($config->get('base_url'), $config);

		$client->setDefaultOption(
				'auth', array(
						$config->get('user'),
						$config->get('password'),
						'Basic'
				)
		);

		$client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionStrucr.json'));

		$client->setUserAgent('OnlineMarketingApiToolkit');
		return $client;
	}

}