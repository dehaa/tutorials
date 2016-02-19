<?php
namespace core;
use general\library\traitlib\SingletonTrait;

/**
 * Class Service
 * @package core
 * @author sefa@dehaa.com
 */
class Service
{
	use SingletonTrait;

	public $parameters;
	/**
	 * Kullanıcı aksiyonlarından gelen parametreler.Ayrıştırma İşlemi burada yapılır.
	 * @param mixed $parameters
	 */
	public function setParameters(array $parameters)
	{
		$this->parameters = $parameters;
		return $this;
	}
}