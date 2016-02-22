<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class DocumentCategoryRelation
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class DocumentCategoryRelation extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::DOCUMENT_CATEGORY_RELATION;
	protected $primaryKey = "categoryId";
	public $timestamps = false;
}