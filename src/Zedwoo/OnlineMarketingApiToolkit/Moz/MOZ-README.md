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

Weitere Infos bietet die entsprechende JSON-Datei:
[ServiceDescriptionSistrix.json](/Resources/ServiceDescriptionMoz.json)