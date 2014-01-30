#OnlineMarketingApiToolkit: OmDataClient

Der OmData-Client beinhaltet alle Endpoints der API unter: http://api.zedwoo-data.de/explorer/

Beispiel:

```php
use Zedwoo\OnlineMarketingApiToolkit\OmData\OmDataClient;

$client = OmDataClient::factory(array(
    'api_key' => 'OmData_API_KEY'
));
$command = $client->getCommand('serps_weekly/get_rankings',array(
    'keyword' => 'hausbau',
    'date' => '2013-11-24'
));
$result = $command->execute(); // returns an array with the result
```

Weitere Infos bietet die entsprechende JSON-Datei:
[ServiceDescriptionOmdata.json](/src/Zedwoo/OnlineMarketingApiToolkit/OmData//Resources/ServiceDescriptionOmData.json)
