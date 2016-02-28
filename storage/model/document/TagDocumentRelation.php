<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class TagDocumentRelation
 * @package storage\model\document
 * @author sefa@dehaa.com
 */

class TagDocumentRelation extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::TAG_DOCUMENT_RELATION;
	protected $primaryKey = "tagId";
	public $timestamps = false;
}