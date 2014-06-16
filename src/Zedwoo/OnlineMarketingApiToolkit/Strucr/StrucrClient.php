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
 * @method Model getCrawlsOfDomainById(array $args = array()) {@command  Strucr getCrawlsOfDomainById}
 * @method Model getDomainById(array $args = array()) {@command  Strucr getDomainById}
 * @method Model getDomains() {@command  Strucr getDomains}
 * @method Model getAllCrawls() {@command  Strucr getAllCrawls}
 * @method Model getCrawlRobotsTxtById(array $args = array()) {@command  Strucr getCrawlRobotsTxtById}
 * @method Model getCrawlById(array $args = array()) {@command  Strucr getCrawlById}
 * @method Model getCrawlByIdHostsByOutgoingLinks(array $args = array()) {@command  Strucr getCrawlByIdHostsByOutgoingLinks}
 * @method Model getCrawlByIdHostsByPages(array $args = array()) {@command  Strucr getCrawlByIdHostsByPages}
 * @method Model getCrawlByIdHostsById(array $args = array()) {@command  Strucr getCrawlByIdHostsById}
 * @method Model getCrawlByIdHostsByIncomingLinks(array $args = array()) {@command  Strucr getCrawlByIdHostsByIncomingLinks}
 * @method Model getCrawlByIdPagesByIdOutgoingLinks(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdOutgoingLinks}
 * @method Model getCrawlByIdPagesByIdIncomingLinks(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdIncomingLinks}
 * @method Model getCrawlByIdPages(array $args = array()) {@command  Strucr getCrawlByIdPages}
 * @method Model getCrawlByIdPagesById(array $args = array()) {@command  Strucr getCrawlByIdPagesById}
 * @method Model getCrawlByIdPagesByIdReport(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdReport}
 * @method Model getCrawlByIdPagesFind(array $args = array()) {@command  Strucr getCrawlByIdPagesFind}
 * @method Model getCrawlByIdPagesByIdCrawl(array $args = array()) {@command  Strucr getCrawlByIdPagesByIdCrawl}
 * @method Model getCrawlByIdReportHints(array $args = array()) {@command  Strucr getCrawlByIdReportHints}
 * @method Model getCrawlByIdReportHintsForValue(array $args = array()) {@command  Strucr getCrawlByIdReportHintsForValue}
 * @method Model getCrawlByIdReportResponsetimesForValue(array $args = array()) {@command  Strucr getCrawlByIdReportResponsetimesForValue}
 * @method Model getCrawlByIdReportLinksIncoming(array $args = array()) {@command  Strucr getCrawlByIdReportLinksIncoming}
 * @method Model getCrawlByIdReportErrors(array $args = array()) {@command  Strucr getCrawlByIdReportErrors}
 * @method Model getCrawlByIdReportLevelCrawled(array $args = array()) {@command  Strucr getCrawlByIdReportLevelCrawled}
 * @method Model getCrawlByIdReportLinksIncomingExternal(array $args = array()) {@command  Strucr getCrawlByIdReportLinksIncomingExternal}
 * @method Model getCrawlByIdReportLevelDiscovered(array $args = array()) {@command  Strucr getCrawlByIdReportLevelDiscovered}
 * @method Model getCrawlByIdReport(array $args = array()) {@command  Strucr getCrawlByIdReport}
 * @method Model getCrawlByIdReportStatusForValue(array $args = array()) {@command  Strucr getCrawlByIdReportStatusForValue}
 * @method Model getCrawlByIdReport2DRank(array $args = array()) {@command  Strucr getCrawlByIdReport2DRank}
 * @method Model getCrawlByIdReportLevelDiscoveredForValue(array $args = array()) {@command  Strucr getCrawlByIdReportLevelDiscoveredForValue}
 * @method Model getCrawlByIdReportLinksOutgoing(array $args = array()) {@command  Strucr getCrawlByIdReportLinksOutgoing}
 * @method Model getCrawlByIdReportPagerank(array $args = array()) {@command  Strucr getCrawlByIdReportPagerank}
 * @method Model getCrawlByIdReportCheirank(array $args = array()) {@command  Strucr getCrawlByIdReportCheirank}
 * @method Model getCrawlByIdReportDuplicateContentSourceByID(array $args = array()) {@command  Strucr getCrawlByIdReportDuplicateContentSourceByID}
 * @method Model getCrawlByIdReportSizesCompressedForValue(array $args = array()) {@command  Strucr getCrawlByIdReportSizesCompressedForValue}
 * @method Model getCrawlByIdReportDuplicateContentById(array $args = array()) {@command  Strucr getCrawlByIdReportDuplicateContentById}
 * @method Model getCrawlByIdReportSizesUncompressedForValue(array $args = array()) {@command  Strucr getCrawlByIdReportSizesUncompressedForValue}
 * @method Model getCrawlByIdReportHttpStatusForValue(array $args = array()) {@command  Strucr getCrawlByIdReportHttpStatusForValue}
 * @method Model getCancelFlags() {@command  Strucr getCancelFlags}
 * @method Model getRobotTxtFlags() {@command  Strucr getRobotTxtFlags}
 * @method Model getResponseTimesById(array $args = array()) {@command  Strucr getResponseTimesById}
 * @method Model getSizesCompressedById(array $args = array()) {@command  Strucr getSizesCompressedById}
 * @method Model getResponseTimes() {@command  Strucr getResponseTimes}
 * @method Model getErrors() {@command  Strucr getErrors}
 * @method Model getRobotTxtFlagsById(array $args = array()) {@command  Strucr getRobotTxtFlagsById}
 * @method Model getStatusPages() {@command  Strucr getStatusPages}
 * @method Model getSections() {@command  Strucr getSections}
 * @method Model getStatusCrawlsById(array $args = array()) {@command  Strucr getStatusCrawlsById}
 * @method Model getSizesUncompressedById(array $args = array()) {@command  Strucr getSizesUncompressedById}
 * @method Model getStatusPagesById(array $args = array()) {@command  Strucr getStatusPagesById}
 * @method Model getLinkTypesById(array $args = array()) {@command  Strucr getLinkTypesById}
 * @method Model getCancelFlagsById(array $args = array()) {@command  Strucr getCancelFlagsById}
 * @method Model getSectionsById(array $args = array()) {@command  Strucr getSectionsById}
 * @method Model getLinkTypes() {@command  Strucr getLinkTypes}
 * @method Model getHostLocations() {@command  Strucr getHostLocations}
 * @method Model getSizesCompressed() {@command  Strucr getSizesCompressed}
 * @method Model getErrorsById(array $args = array()) {@command  Strucr getErrorsById}
 * @method Model getLinkReachesById(array $args = array()) {@command  Strucr getLinkReachesById}
 * @method Model getHostLocationsById(array $args = array()) {@command  Strucr getHostLocationsById}
 * @method Model getStatusCrawls() {@command  Strucr getStatusCrawls}
 * @method Model getLinkReaches() {@command  Strucr getLinkReaches}
 * @method Model getHints() {@command  Strucr getHints}
 * @method Model getHintById(array $args = array()) {@command  Strucr getHintById}
 * @method Model getSizesUncompressed() {@command  Strucr getSizesUncompressed}
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