<?php
namespace Zedwoo\Generator;

class ServiceDescriptionOperation {
	public $extends;
	public $httpMethod;
	public $uri;
	public $summary;
	public $class;
	public $responseClass;
	public $responseNotes;
	public $type;
	public $description;
	public $responseType;
	public $deprecated;
	public $errorResponses;
	public $parameters = array();
}
