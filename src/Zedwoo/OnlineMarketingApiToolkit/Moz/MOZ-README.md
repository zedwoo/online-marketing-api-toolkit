#OnlineMarketingApiToolkit: MozClient

Der Moz-Client beinhaltet alle Endpoints der API unter: http://apiwiki.moz.com/categories/api-reference

Beispiel:

```php
use Zedwoo\OnlineMarketingApiToolkit\Moz\MozCLient
$client = MozClient::factory(array( 'accessID' => 'YOUR ACCESS ID',
                                    'secretKey' => 'YOUR SECRET Key'
								));
$command = $client->getCommand('url-metrics', array(
						'url' => 'www.example.org/',
						'Cols' => '4'
);
$result = $command->execute(); // returns an array with the result
```

##Special Batch Request:

```php
$command = $client->getCommand('url-metrics-batch', array(
												   'urls' => json_encode(array('www.chefkoch.de/rezepte/','www.spiegel.de','moz.com')),
												   'Cols' => 103079215104
											  ));
```

Weitere Infos bietet die entsprechende JSON-Datei:
[ServiceDescriptionMoz.json](https://github.com/zedwoo/online-marketing-api-toolkit/blob/master/src/Zedwoo/OnlineMarketingApiToolkit/Moz/Resources/ServiceDescriptionMoz.json)