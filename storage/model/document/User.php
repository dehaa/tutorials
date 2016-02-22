<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\ProcessType;
use general\enum\Table;

/**
 * @author sefa@dehaa.com
 */
class User extends Model
{
	protected $connection = Connection::MAIN;
	protected $table = Table::USER;
	protected $primaryKey = "userId";

	/**
	 * @param null $param
	 * @return array
	 */
	public static function getRequiredParameters($param = null)
	{
		$requiredParameters = [
			ProcessType::LOGIN => [
				'email', 'password'
			],
			ProcessType::REGISTER => [
				'userEmail', 'userPassword', 'userPasswordRepeat', 'userName', 'userSurname'
			]
		];

		if (isset($param) && array_key_exists($param, $requiredParameters)) {
			return $requiredParameters[$param];
		} else {
			return $requiredParameters;
		}

	}

	public function token()
	{
		return $this->hasOne(Token::class, "userId", "userId");
	}

	public function documents()
	{
		return $this->hasMany(Document::class, "documentId", "documentId");
	}
}