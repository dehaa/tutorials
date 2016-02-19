<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class Token
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class Token extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::TOKEN;

}