<?php

namespace storage\model\document;

use core\Model;
use general\enum\Table;

/**
 * @author sefa@dehaa.com
 */
class Category extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::CATEGORY;
	protected $primaryKey = "categoryId";

	public function documents()
	{
		return $this->hasMany(Document::class, "documentId", "documentId");
	}
}