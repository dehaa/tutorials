<?php
namespace general\library\user;
/**
 * Class Token
 * @package general\library\user
 * @author sefa@dehaa.com
 */
class Token
{
	public static function create(){
		return md5(microtime().rand());
	}

	public static function update(){
		return $key = md5("dehaa".microtime().rand());
	}
}