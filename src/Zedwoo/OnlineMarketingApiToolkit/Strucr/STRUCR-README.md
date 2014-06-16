#OnlineMarketingApiToolkit: StrucrClient

More info about the Seokicks-Api:
https://strucr.com/

Usage:

```php
use Zedwoo\OnlineMarketingApiToolkit\Strucr\StrucrClient;


$client = StrucrClient::factory(array(
    'user' => 'your api user id',
    'password' => 'your api password
));

// Get domains
$result = $client->getDomains();

// Get domain by id

$result = $client->getDomainById(array( 'id' => 'ID OF DOMAIN'));
```

