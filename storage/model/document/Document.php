<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;
use storage\model\schema\Schema;

/**
 * Class Document
 * @package storage\model\document
 */
class Document extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::DOCUMENT;
	protected $primaryKey = "documentId";

	public function comments()
	{
		return $this->hasMany(Comment::class, "documentId", "documentId");
	}

	public function user()
	{
		return $this->hasOne(User::class, "userId", "userId");
	}
}