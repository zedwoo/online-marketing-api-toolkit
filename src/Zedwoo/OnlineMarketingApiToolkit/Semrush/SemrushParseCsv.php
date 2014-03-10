<?php
namespace Zedwoo\OnlineMarketingApiToolkit\Semrush;

use Guzzle\Service\Command\OperationCommand;
use Guzzle\Service\Command\ResponseClassInterface;

class SemrushParseCsv implements ResponseClassInterface
{
	protected $bundles = array();

	public function addBundle($bundle)
	{
		$this->bundles[] = $bundle;
	}

	/**
	 * Create a response model object from a completed command
	 *
	 * @param OperationCommand $command That serialized the request
	 *
	 * @return self
	 */
	public static function fromCommand(OperationCommand $command)
	{
		$lines = explode("\n", $command->getResponse()->getBody(true));
		$head = str_getcsv(array_shift($lines),';');
		foreach($head as $key => $headItem){
		$head[$key] = self::strtocamelcase($headItem);
	}
		$array = array();
		foreach ($lines as $line) {
			$array[] = array_combine($head, str_getcsv($line,';'));
		}
		return $array;
	}
	public static function strtocamelcase($str){
		$str = strtolower($str);
		$str = str_replace(array('(%)','.'),array('Percent',''),$str);
	return preg_replace_callback('#[\s]+(.)#',
		create_function('$r', 'return strtoupper($r[1]);'), $str);
}
}
