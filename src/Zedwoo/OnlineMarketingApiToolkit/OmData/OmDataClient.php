<?php
namespace Zedwoo\OnlineMarketingApiToolkit\OmData;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Resource\Model;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Common\Exception\InvalidArgumentException;


/**
 * Class OmDataClient
 * @package Zedwoo\OnlineMarketingApiToolkit\OmData
 *
 * @method  Model accountStatus () {@command OmData accountStatus}
 * @method  Model serpsWeeklyAddKeyword (array $args = array()) {@command OmData serpsWeeklyAddKeyword}
 * @method  Model serpsWeeklyDeleteKeyword (array $args = array()) {@command OmData serpsWeeklyDeleteKeyword}
 * @method  Model serpsWeeklyGetKeywords (array $args = array()) {@command OmData serpsWeeklyGetKeywords}
 * @method  Model serpsWeeklyGetRankings (array $args = array()) {@command OmData serpsWeeklyGetRankings}
 * @method  Model serpsDailyAddKeyword (array $args = array()) {@command OmData serpsDailyAddKeyword}
 * @method  Model serpsDailyDeleteKeyword (array $args = array()) {@command OmData serpsDailyDeleteKeyword}
 * @method  Model serpsDailyGetKeywords (array $args = array()) {@command OmData serpsDailyGetKeywords}
 * @method  Model serpsDailyGetRankings (array $args = array()) {@command OmData serpsDailyGetRankings}
 * @method  Model serpsDirectGetRankings (array $args = array()) {@command OmData serpsDirectGetRankings}
 * @method  Model urlsPagerank (array $args = array()) {@command OmData urlsPagerank}
 * @method  Model urlsServer (array $args = array()) {@command OmData urlsServer}
 * @method  Model urlsUrlCheck (array $args = array()) {@command OmData urlsUrlCheck}
 * @method  Model keywordsDifficulty (array $args = array()) {@command OmData keywordsDifficulty}
 * @method  Model keywordsUserIntent (array $args = array()) {@command OmData keywordsUserIntent}
 * @method  Model statusGet () {@command OmData statusGet}
 */
class OmDataClient extends Client
{
    /**
     * @param array $config
     * @return OmDataClient
     * @throws \Guzzle\Common\Exception\InvalidArgumentException
     */
    public static function factory($config = array())
    {
        $default = array('base_url' => 'http://api.zedwoo-data.de/');

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
            'api_key' => $config['api_key']
										   ));

        $client->setDescription(ServiceDescription::factory(__DIR__ . '/Resources/ServiceDescriptionOmdata.json'));
        $client->setUserAgent('OnlineMarketingApiToolkit');
        return $client;
    }

}