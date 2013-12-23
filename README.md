#Online-Marketing-Api-Toolkit

##Was?
Diese Libary bietet eine schnelle Möglichkeit, verschiedene APIs aus dem Online-Marketing-Bereich abzufragen.

##Warum?
Viele Rest-APIs haben keinen Client und bieten nur beispielhaften Code. Diese Library nutzt die [Guzzle HTTP Client Library](https://github.com/guzzle/guzzle).
Dadurch hat man für alle APIs die tollen Möglichkeiten von Guzzle:
* immer gleiches Exceptionhandling
* tolle Module (Bsp.: Backoff-Plugin)
* etc.

##Welche?
Aktuell sind folgende APIs in dieser Library implementiert:
* [Sistrix](/src/Zedwoo/OnlineMarketingApiToolkit/Sistrix/Sistrix-README.md)
* [Moz](/src/Zedwoo/OnlineMarketingApiToolkit/Moz/Moz-README.md)
* [OmData](/src/Zedwoo/OnlineMarketingApiToolkit/OmData/OmData-README.md)

##Installation
Das Online-Marketing-Api-Toolkit ist über Packagist ([zedwoo/online-marketing-api-toolkit](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit)) erhältlich und damit über
[Composer](http://getcomposer.org/) installierbar.

Wenn Composer nicht benutzt werden soll, dann den Code einfach von Github downloaden und mit einem PSR-0 kompatiblen Autoaloader laden.

###Composer Beispiel
OnlineMarketingApiToolkit in composer.json hinzufügen:
```js
{
    "require": {
        "zedwoo/online-marketing-api-toolkit": "0.1.*"
    }
}
```

##Nutzung
Die Nutzung der unterschiedlichen Clients ist immer ähnlich.
Beispiel Sistrix:

```php
use Zedwoo\OnlineMarketingApiToolkit\Sistrix\SistrixClient;
$client = SistrixClient::factory(array(
									 'api_key' => 'SISTRIX_API-Key'
								));
$command = $client->getCommand('credits');
$result = $command->execute(); // returns an array with the result
```
Für jede APi gibt es eine kurze Doku und eine Datei im Json-Schema. Siehe die Links unter "Welche?".


Contributing

    Fork it
    Create your feature branch (git checkout -b my-new-feature)
    Commit your changes (git commit -am 'Add some feature')
    Push to the branch (git push origin my-new-feature)
    Create new Pull Request

