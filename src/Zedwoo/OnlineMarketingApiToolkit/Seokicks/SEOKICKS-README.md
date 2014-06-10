#OnlineMarketingApiToolkit: SeokicksClient

More info about the Seokicks-Api:
http://www.seokicks.de/backlink-api.html

Usage:

```php
use Zedwoo\OnlineMarketingApiToolkit\SeoKicks\SeokicksClient;

$client = SeokicksClient::factory(array(
    'appid' => 'SEOKICKS_API_KEY'
));

// Overview
$result = $client->getInlinkData(array('query' => 'example.com')); // returns an array with the result

// linking domains including the number of links per domain
$result = $client->getInlinkData(array('query' => 'example.com', 'details' => 1));

// exact linking pages including their link attributes.
$result = $client->getInlinkData(array('query' => 'example.com', 'details' => 2));

//  precisely one exactly linking page including its link attributes.
$result = $client->getInlinkData(array('query' => 'example.com', 'details' => 3));
```

More Info about the params are in the json-file:
[ServiceDescriptionSeokicks.json](https://github.com/zedwoo/online-marketing-api-toolkit/blob/master/src/Zedwoo/OnlineMarketingApiToolkit/Seokicks/Resources/ServiceDescriptionSeokicks.json)
