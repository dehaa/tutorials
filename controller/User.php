<?php
namespace controller;

use core\Controller;
use general\enum\ProcessType;
use general\library\request\Request;
use service\UserService;
use storage\model\document\User as UserModel;

/**
 * Class User
 * @package controller
 * @author sefa@dehaa.com
 */
class User extends Controller
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


	public function add()
	{
		// TODO: Implement add() method.
	}

	public function get()
	{
		// TODO: Implement get() method.
	}

	public function update()
	{
		// TODO: Implement update() method.
	}

	public function remove()
	{
		// TODO: Implement remove() method.
	}
}