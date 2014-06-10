<?php
/**
 * $plugin = new ForceCharsetPlugin();
 * $plugin->setForcedCharset('utf8');
 * $guzzleClient->addSubscriber($plugin);
 * // https://gist.github.com/pschultz/6554265
 */

namespace Zedwoo\OnlineMarketingApiToolkit\Seokicks;


use Guzzle\Common\Event;
use Guzzle\Http\Message\Header;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ForceContenttypePlugin implements EventSubscriberInterface {

	private $forcedContenttype = ' json ';


	public static function getSubscribedEvents() {
		return array(
				'request.complete' => 'onRequestComplete'
		);
	}


	/**
	 * @param string $forcedContenttype
	 */
	public function setForcedContenttype( $forcedContenttype ) {
		$this->forcedContenttype = $forcedContenttype;
	}


	/**
	 * @return string
	 */
	public function getForcedContenttype() {
		return $this->forcedContenttype;
	}


	public function onRequestComplete( Event $event ) {
		$response = $event['response'];
		$header = $response->getHeader( 'content-type' );
		$response->setHeader( 'content-type', str_replace( 'javascript', $this->forcedContenttype, $header->__toString() ) );
	}
}