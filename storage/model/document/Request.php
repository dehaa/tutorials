<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class Request
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class Request extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::REQUEST;
	protected $primaryKey = "requestId";
}