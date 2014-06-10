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
 * @method  model accountStatus () {@command OmData accountStatus}
 * @method  model serpsWeeklyAddKeyword (array $args = array()) {@command OmData serpsWeeklyAddKeyword}
 * @method  model serpsWeeklyDeleteKeyword (array $args = array()) {@command OmData serpsWeeklyDeleteKeyword}
 * @method  model serpsWeeklyGetKeywords (array $args = array()) {@command OmData serpsWeeklyGetKeywords}
 * @method  model serpsWeeklyGetRankings (array $args = array()) {@command OmData serpsWeeklyGetRankings}
 * @method  model serpsDailyAddKeyword (array $args = array()) {@command OmData serpsDailyAddKeyword}
 * @method  model serpsDailyDeleteKeyword (array $args = array()) {@command OmData serpsDailyDeleteKeyword}
 * @method  model serpsDailyGetKeywords (array $args = array()) {@command OmData serpsDailyGetKeywords}
 * @method  model serpsDailyGetRankings (array $args = array()) {@command OmData serpsDailyGetRankings}
 * @method  model serpsDirectGetRankings (array $args = array()) {@command OmData serpsDirectGetRankings}
 * @method  model urlsPagerank (array $args = array()) {@command OmData urlsPagerank}
 * @method  model urlsServer (array $args = array()) {@command OmData urlsServer}
 * @method  model urlsUrlCheck (array $args = array()) {@command OmData urlsUrlCheck}
 * @method  model keywordsDifficulty (array $args = array()) {@command OmData keywordsDifficulty}
 * @method  model keywordsUserIntent (array $args = array()) {@command OmData keywordsUserIntent}
 * @method  model statusGet () {@command OmData statusGet}
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