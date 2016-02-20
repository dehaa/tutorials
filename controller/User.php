<?php
namespace controller;

use general\enum\ProcessType;
use general\library\request\Request;
use service\UserService;
use storage\model\document\User as UserModel;

/**
 * Class User
 * @package controller
 * @author sefa@dehaa.com
 */
class User
{
	public function login()
	{

	}

	/**
	 * Register Contoller
	 * @return \storage\model\document\Token
	 */
	public function register()
	{
		$parameters = Request::get(UserModel::getRequiredParameters(ProcessType::REGISTER));
		return UserService::getInstance()
			->setParameters($parameters)
			->register();
	}


}