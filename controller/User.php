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
	 */
	public function register()
	{
		$parameters = Request::get(UserModel::getRequiredParameters(ProcessType::REGISTER));
		UserService::getInstance()
			->setParameters($parameters)
			->register();
	}


}