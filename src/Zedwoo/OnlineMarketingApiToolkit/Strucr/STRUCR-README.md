#OnlineMarketingApiToolkit: StrucrClient

More info about the Strucr-Api:
https://strucr.com/

Usage:

```php
use Zedwoo\OnlineMarketingApiToolkit\Strucr\StrucrClient;


$client = StrucrClient::factory(array(
    'user' => 'your api user id',
    'password' => 'your api password'
));

// Get domains
$result = $client->getDomains();

// Get domain by id

$result = $client->getDomainById(array( 'id' => 'ID OF DOMAIN'));
```

##Second Example: Get 404 pages with incoming links

```php
use Zedwoo\OnlineMarketingApiToolkit\Strucr\StrucrClient;

$client = StrucrClient::factory(array(
    'user' => 'your api user id',
    'password' => 'your api password'
));

$crawls = $client->getAllCrawls();

if(count($crawls) >= 1 AND array_key_exists('id', $crawls[0])){
	echo 'Domain: ' . $crawls[0]['domain']['host'] . PHP_EOL;
	echo 'Crawl Id: ' . $crawls[0]['id'] . PHP_EOL;

	/*
	 * Get 404 Pages with links to them
	 */

	$errorPages = $client->getCrawlByIdReportHttpStatusForValue(array('id' => $crawls[0]['id'], 'value' => 404 ));
	if(count($errorPages['pages'])){
		echo '404-pages' . PHP_EOL;
	   foreach($errorPages['pages'] as $page){
		   echo $page['url'] . PHP_EOL;
		   $linkedFrom = $client->getCrawlByIdPagesByIdIncomingLinks(array('id' => $crawls[0]['id'], 'page_id' => $page['id'], 'chunksize' => 10 ));

		   foreach($linkedFrom['links'] as $link){
				echo '==> ' . $link['page']['url'] . ': ' . $link['type']['value'] . PHP_EOL;
			}

	   }
	   } else {
		echo 'No 404-Pages' . PHP_EOL;
	}


```