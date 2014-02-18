[![Latest Stable Version](https://poser.pugx.org/zedwoo/online-marketing-api-toolkit/v/stable.png)](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit) [![Total Downloads](https://poser.pugx.org/zedwoo/online-marketing-api-toolkit/downloads.png)](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit) [![Latest Unstable Version](https://poser.pugx.org/zedwoo/online-marketing-api-toolkit/v/unstable.png)](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit) [![License](https://poser.pugx.org/zedwoo/online-marketing-api-toolkit/license.png)](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit)
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
* [Sistrix](/src/Zedwoo/OnlineMarketingApiToolkit/Sistrix/SISTRIX-README.md)
* [Moz](/src/Zedwoo/OnlineMarketingApiToolkit/Moz/MOZ-README.md)
* [OmData](/src/Zedwoo/OnlineMarketingApiToolkit/OmData/OMDATA-README.md)
* [Semrush](/src/Zedwoo/OnlineMarketingApiToolkit/Semrush/SEMRUSH-README.md)

##Installation
Das Online-Marketing-Api-Toolkit ist über Packagist ([zedwoo/online-marketing-api-toolkit](https://packagist.org/packages/zedwoo/online-marketing-api-toolkit)) erhältlich und damit über
[Composer](http://getcomposer.org/) installierbar.

###Composer installieren (bei Bedarf)
Wenn Composer bisher nicht benutzt wurde und nicht installiert wurde, dann einfach installieren:
```
 curl -sS https://getcomposer.org/installer | php
```
Weitere Möglichkeiten der Installation sind hier beschrieben:
https://getcomposer.org/download/

Wenn Composer nicht benutzt werden soll, dann den Code einfach von Github downloaden und mit einem PSR-0 kompatiblen Autoaloader laden.

###Neues Projekt erstellen
Du kannst dir ein neues Projekt anlegen, in dem du folgende Zeile ausführst:
```
php composer.phar create-project zedwoo/online-marketing-api-toolkit projekt_name
```
Dabei einfach "projekt_name" durch einen eigenen Namen ersetzen.


Oder einfacher:
###Composer Beispiel für bestehendes Projekt
OnlineMarketingApiToolkit in composer.json hinzufügen bzw. Datei erstellen:
```js
{
    "require": {
        "zedwoo/online-marketing-api-toolkit": "1.0.*"
    }
}
```
Und dann folgendes Zeile ausführen:
```
php composer.phar install
```

##Nutzung
Die Nutzung der unterschiedlichen Clients ist immer ähnlich.
Beispiel Sistrix:

```php
require_once('vendor/autoload.php'); // Autoloaderaufruf von Composer
use Zedwoo\OnlineMarketingApiToolkit\Sistrix\SistrixClient;
$client = SistrixClient::factory(array(
									 'api_key' => 'SISTRIX_API-Key'
								));
$command = $client->getCommand('credits');
$result = $command->execute(); // returns an array with the result
```
Für jede APi gibt es eine kurze Doku und eine Datei im Json-Schema. Siehe die Links unter "Welche?".


##Contributing

    Fork it
    Create your feature branch (git checkout -b my-new-feature)
    Commit your changes (git commit -am 'Add some feature')
    Push to the branch (git push origin my-new-feature)
    Create new Pull Request

