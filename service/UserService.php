<?php
namespace service;

use core\Service;
use general\library\traitlib\SingletonTrait;
use general\library\user\Token;
use storage\model\document\User;

/**
 * Class UserService
 * @package service
 * @author sefa@dehaa.com
 */
class UserService extends Service
{
	public function register()
	{
		$user = new User();
		foreach ($this->parameters as $userParameter => $value) {
			if ($userParameter == "userPasswordRepeat") {
				continue;
			}
			$user->$userParameter = $value;
		}
		$user->save();
		$tokenModel = new \storage\model\document\Token();
		$tokenModel->token = Token::getInstance()->create();
		$tokenModel->userId = $user->userId;
		$tokenModel->save();
		return $user.$tokenModel;
	}

	public function login()
	{

	}
}