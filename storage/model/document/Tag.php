<?php
namespace storage\model\document;
use general\enum\Connection;
use general\enum\Table;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class Tag extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::TAG;
	protected $primaryKey = "tagId";
}