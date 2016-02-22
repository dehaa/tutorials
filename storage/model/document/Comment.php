<?php

namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * @author sefa@dehaa.com
 */
class Comment extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::COMMENT;
	protected $primaryKey = "commentId";

	public function document()
	{
		return $this->hasOne(Document::class, "documentId");
	}
}