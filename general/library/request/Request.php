<?php
namespace general\library\request;
/**
 * Class Request
 * @package general\library\request
 * @author sefa@dehaa.com
 * @method static Request get($parameter)
 * @method static Request post($parameter)
 */
class Request
{
	/**
	 * GET ve POST verilerine ulaşım için kullanılır.
	 * @param $name
	 * @param $parameter
	 * @return array
	 */
	public static function __callStatic($name, $parameter)
	{
		$method = $name == "get" ? $_GET : $_POST;
		$parameter = $parameter[0];
		if (is_array($parameter)) {
			$parameterList = [];
			foreach ($parameter as $param) {
				if (array_key_exists($param, $method)) {
					$parameterList[$param] = $method[$param];
				}
			}
			return $parameterList;
		} else if (array_key_exists($parameter, $$method)) {
			return $method[$parameter];
		}
	}
}