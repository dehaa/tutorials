<?php
namespace general\library\validation;

use general\library\traitlib\SingletonTrait;

/**
 * Class Validation
 * @package general\library\validation
 * @author sefa@dehaa.com
 */
class Validation
{
	use SingletonTrait;

	public function validate($parameters)
	{
		foreach ($parameters as $parameter => $validationRules) {
		}
	}
}