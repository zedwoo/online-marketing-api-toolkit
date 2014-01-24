#OnlineMarketingApiToolkit: SistrixClient

Der Sistrix-Client beinhaltet alle Endpoints der API unter: http://www.sistrix.de/service/docs/api/

Beispiel:

```php
use Zedwoo\OnlineMarketingApiToolkit\Sistrix\SistrixClient;
$client = SistrixClient::factory(array(
									 'api_key' => 'SISTRIX_API-Key'
								));
$command = $client->getCommand('domain.sichtbarkeitsindex',
					array(
						'domain' => 'sistrix.de'
);
$result = $command->execute(); // returns an array with the result
```

Weitere Infos bietet die entsprechende JSON-Datei:
[ServiceDescriptionSistrix.json](/Resources/ServiceDescriptionSistrix.json)
