<?php
namespace general\library\user;

use general\library\traitlib\SingletonTrait;

/**
 * Class Token
 * @package general\library\user
 * @author sefa@dehaa.com
 */
class Token
{
	use SingletonTrait;

	public function create()
	{
		return $key = md5("dehaa" . microtime() . rand());
	}
}